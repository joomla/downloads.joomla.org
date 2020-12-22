<?php
/**
 * ARS Download Repository Generator
 *
 * @copyright  Copyright (C) 2015 George Wilson. All rights reserved.
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

// Load the GForge helper
JLoader::register('GForge', __DIR__ . '/gforge/gforge.php');

/**
 * ARS Download Repository Generator
 *
 * This CLI script imports the language packs out of JoomlaCode and uploads them to s3 initialising all the
 * relevant data in ARS and our own Language Pack Component
 *
 * @since  1.0
 */
class ImportLanguagePacks extends JApplicationCli
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

		// Set up our GForge adapter
		$this->gforge = new GForge('http://joomlacode.org/gf');
		$this->gforge->login($this->get('gforge_username'), $this->get('gforge_password'));
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
		$this->out('<info>Processing 2.5 releases from JoomlaCode</info>');
		$this->processGForgeReleases('jtranslation1_6');

//		$this->out('<info>Processing 3.x releases from JoomlaCode</info>');
//		$this->processGForgeReleases('jtranslation3_x');
	}

	/**
	 * Process an array of GForge release IDs.
	 *
	 * @param   string  $projectId  The name of the project in gforge to process.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	private function processGForgeReleases(string $projectId)
	{
		$project = $this->gforge->getProject($projectId);
		$packages = $this->gforge->getPackagesFromProject($project->project_id);

		if ($packages === false)
		{
			$this->out(sprintf('<error>No packages found for project "%s"</error>', $projectId));

			return;
		}

		foreach ($packages as $package)
		{
			$name_explode = explode('_', $package->package_name);
			$lang_tag     = array_pop($name_explode);
			$name         = implode(' ', $name_explode);

			if ($package->is_public === true && $package->status_id === 1 && $package->require_login === false)
			{
				$packageId = $package->frs_package_id;
				$releases = $this->gforge->getReleasesFromPackage($packageId);

				// Check that some releases were found
				if ($releases === false)
				{
					$this->out(sprintf('<error>No releases found for package "%s" in project "%s". Continuing to next package</error>', $packageId, $projectId));

					continue;
				}

				foreach ($releases as $release)
				{
					$releaseId = $release->frs_release_id;
					$files = $this->gforge->getFilesystemsForRelease($releaseId);

					// Check that some files were found
					if ($files === false)
					{
						$this->out(sprintf('<error>No files found for release "%s" in package "%s" (project "%s)". Continuing to next release</error>', $releaseId, $packageId, $projectId));

						continue;
					}

					foreach ($files as $file)
					{
						if ($file->deleted === false && substr($file->file_name, -3) === 'zip'
							&& preg_match('/^' . $lang_tag . '_joomla_lang_full_[0-9]{1,2}.[0-9]{1,2}.[0-9]{1,2}v[0-9]{1,2}.zip/', $file->file_name) > 0)
						{
							$this->out('URL: http://joomlacode.org' . $file->download_url);
						}
					}
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
	$app = JApplicationCli::getInstance('ImportLanguagePacks');
	set_exception_handler(['ImportLanguagePacks', 'handleException']);
	$app->execute();
}
catch (Exception $e)
{
	fwrite(STDOUT, "\nERROR: " . $e->getMessage() . "\n");
	fwrite(STDOUT, "\n" . $e->getTraceAsString() . "\n");

	exit(1);
}
