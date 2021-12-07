<?php
/**
 * ARS Download Repository Generator
 *
 * @copyright  Copyright (C) 2015 Michael Babker. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

// Set flag that this is a parent file.
const _JEXEC = 1;

error_reporting(E_ALL | E_NOTICE);
ini_set('display_errors', 1);

// Load system defines
if (file_exists(dirname(__DIR__) . '/defines.php'))
{
	require_once dirname(__DIR__) . '/defines.php';
}

if (!defined('_JDEFINES'))
{
	define('JPATH_BASE', dirname(__DIR__));
	require_once JPATH_BASE . '/includes/defines.php';
}

require_once JPATH_LIBRARIES . '/import.legacy.php';
require_once JPATH_LIBRARIES . '/cms.php';

// Import FOF 3.0
if (!defined('FOF30_INCLUDED') && !@include_once(JPATH_LIBRARIES . '/fof30/include.php'))
{
	throw new RuntimeException('FOF 3.0 is not installed', 500);
}

// Import the configuration.
require_once JPATH_CONFIGURATION . '/configuration.php';

// Load the custom GitHub class
JLoader::register('JGithubPackageRepositoriesReleases', __DIR__ . '/github/releases.php');

/**
 * ARS Download Repository Generator
 *
 * This CLI script imports the weblinks download counts from GitHub
 *
 * @since  1.0
 */
class ImportDownloadCounts extends JApplicationCli
{
	/**
	 * FOF Container reference for ARS
	 *
	 * @var    \FOF30\Container\Container
	 * @since  1.0
	 */
	private $container;

	/**
	 * The GForge API adapter
	 *
	 * @var    GForge
	 * @since  1.0
	 */
	private $gforge;

	/**
	 * The GitHub API adapter
	 *
	 * @var    JGithub
	 * @since  1.0
	 */
	private $github;

	/**
	 * Lookup array mapping version numbers to GitHub release IDs
	 *
	 * @var    array
	 * @since  1.0
	 */
	protected $lookup = [
		'tags/3.4.0',
		'tags/3.4.1',
		'tags/3.5.0',
		'tags/3.6.0',
	];

	/**
	 * F0FPlatform reference
	 *
	 * @var    \FOF30\Platform\Joomla\Platform
	 * @since  1.0
	 */
	private $platform;

	/**
	 * Constructor.
	 *
	 * @since   1.0
	 */
	public function __construct()
	{
		parent::__construct();

		$output = new \Joomla\Application\Cli\Output\Stdout;
		$output->setProcessor(new \Joomla\Application\Cli\Output\Processor\ColorProcessor);
		$this->setOutput($output);

		// Pull a reference to the ARS container
		$this->container = FOF30\Container\Container::getInstance('com_ars');

		// Use the FOF Platform to get all of our data
		$this->platform = $this->container->platform;

		// Set up our GitHub adapter
		$options = new \Joomla\Registry\Registry;
		$options->set('api.username', $this->get('github_username'));
		$options->set('api.password', $this->get('github_password'));

		// Instantiate the Github object
		$this->github = new JGithub($options);
	}

	/**
	 * Method to run the application routines.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function doExecute()
	{
		$this->out('<info>Processing releases from GitHub</info>');
		$this->processGitHubReleases($this->lookup);
	}

	/**
	 * Process an array of GitHub release IDs.
	 *
	 * @param   array  $releaseIds  The release IDs to process.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	private function processGitHubReleases(array $releaseIds)
	{
		foreach ($releaseIds as $release)
		{
			$this->out(sprintf('<info>Processing: %s</info>', $release));

			$release = $this->github->repositories->releases->get('joomla-extensions', 'weblinks', $release);

			foreach ($release->assets as $asset)
			{
				$this->out(sprintf('<info>Processing package: %s</info>', $asset->name));

				// Try to load the item for this file
				/** @var \Akeeba\ReleaseSystem\Site\Model\Items $itemsModel */
				$itemsModel = $this->container->factory->model('Items');

				if (!$itemsModel->load(['filename' => $asset->name]))
				{
					$this->out(sprintf('<error>Could not find an item with the filename "%s"</error>', $asset->name));

					continue;
				}

				$count = $itemsModel->hits;
				$count += $asset->download_count;

				try
				{
					$itemsModel->save(['hits' => $count]);
				}
				catch (Exception $e)
				{
					$this->out(sprintf('<error>Error saving the "%1$s" item: %2$s</error>', $asset->name, $e->getMessage()));
				}
			}
		}
	}

	/**
	 * Render the error page based on an exception.
	 *
	 * @param   Exception|Throwable  $error  An Exception or Throwable (PHP 7+) object for which to render the error page.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public static function handleException($error)
	{
		fwrite(STDOUT, "\nERROR: " . $error->getMessage() . "\n");
		fwrite(STDOUT, "\n" . $error->getTraceAsString() . "\n");

		exit(1);
	}
}

// Global exception handler, this way we can get decent messages if need be
try
{
	$app = JApplicationCli::getInstance('ImportDownloadCounts');
	set_exception_handler(['ImportDownloadCounts', 'handleException']);
	$app->execute();
}
catch (Exception $e)
{
	fwrite(STDOUT, "\nERROR: " . $e->getMessage() . "\n");
	fwrite(STDOUT, "\n" . $e->getTraceAsString() . "\n");

	exit(1);
}
