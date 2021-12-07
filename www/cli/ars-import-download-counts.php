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

// Load the GForge helper
JLoader::register('GForge', __DIR__ . '/gforge/gforge.php');

// Load the custom GitHub class
JLoader::register('JGithubPackageRepositoriesReleases', __DIR__ . '/github/releases.php');

/**
 * ARS Download Repository Generator
 *
 * This CLI script imports the CMS download counts from JoomlaCode and GitHub
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
	 * Array containing Joomla! 1.0 Release IDs
	 *
	 * @var    array
	 * @since  1.0
	 */
	private $jc10ReleaseIds = [
		109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 4508, 4509, 6729, 6730, 6828, 6829
	];

	/**
	 * Array containing Joomla! 1.5 Release IDs
	 *
	 * @var    array
	 * @since  1.0
	 */
	private $jc15ReleaseIds = [
		5078, 6681, 6694, 7060, 7061, 7369, 7370, 7925, 7926, 8102, 8103, 8232, 8233, 8375, 8376, 8897, 8898, 9293, 9294,
		9910, 9911, 10208, 10209, 10547, 10548, 10696, 10697, 10785, 10786, 11395, 11396, 12153, 12154, 12192, 12193,
		12350, 12351, 12583, 12584, 12610, 12611, 12974, 13034, 13105, 13106, 14505, 14506, 15898, 15899, 16025, 16026,
		16890, 16891
	];

	/**
	 * Array containing Joomla! 2.5 Release IDs
	 *
	 * @var    array
	 * @since  1.0
	 */
	private $jc25ReleaseIds = [
		13869, 14236, 14237, 14589, 14590, 14658, 14659, 15063, 15064, 15178, 15179, 15378, 15379, 15278, 15279, 15751, 15752,
		15900, 15901, 16023, 16024, 16391, 16392, 16515, 16516, 16393, 16394, 16511, 16512, 16760, 16761, 16803, 16804, 16914,
		16915, 17137, 17138, 17173, 17174, 17409, 17410, 17715, 17716, 17967, 17968, 18229, 18230, 18321, 18322, 18545, 18554,
		18555, 18624, 18625, 18840, 18841, 18858, 18859, 19009, 19010, 19145, 19146, 19238, 19241, 19395, 19396, 19522, 19523,
		19546, 19547, 19641, 19642, 19663, 19664, 19754, 19755, 19798, 19799, 19816, 19817, 19918, 19919
	];

	/**
	 * Array containing the Joomla! 3 Release IDs
	 *
	 * @var    array
	 * @since  1.0
	 */
	private $jc3ReleaseIds = [
		17519, 17520, 17574, 17575, 17709, 17710, 17965, 17966, 18264, 18265, 18262, 18263, 18323, 18324, 18542, 18543, 18552,
		18557, 18558, 18622, 18623, 18843, 18844, 18838, 18839, 19007, 19008, 19143, 19144, 19239, 19240, 19391, 19392, 19756,
		19757, 19800, 19801, 19819, 19820, 19393, 19394, 19524, 19525, 19639, 19640, 19665, 19666, 19752, 19753, 19802, 19803,
		19822, 19823, 19987, 19988, 20020, 20021, 20070, 20071, 20086, 20087, 20126, 20127, 20184, 20185, 20186, 20187,
	];

	/**
	 * Lookup array mapping version numbers to GitHub release IDs
	 *
	 * @var    array
	 * @since  1.0
	 */
	protected $lookup = [
		'2.5.25' => 576829,
		'3.2.5'  => 576814,
		'3.3.4'  => 576779,
		'2.5.27' => 596183,
		'3.2.7'  => 596176,
		'3.3.6'  => 596193,
		'2.5.28' => 771585,
		'3.4.0'  => 985058,
		'3.4.1'  => 1076445,
		'3.4.2'  => 1478160,
		'3.4.3'  => 1489236,
		'3.4.4'  => 1784493,
		'3.4.5'  => 2002462,
		'3.4.6'  => 2283609,
		'3.4.7'  => 2323872,
		'3.4.8'  => 2338699,
		'3.5.0'  => 2858291,
		'3.5.1'  => 2959115,
		'3.6.0'  => 3642165,
		'3.6.1'  => 3807122,
		'3.6.2'  => 3817828,
		'3.6.3'  => 4418968,
		'3.6.4'  => 4477535,
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

		// Set up our GForge adapter
		$this->gforge = new GForge('http://joomlacode.org/gf');
		$this->gforge->login($this->get('gforge_username'), $this->get('gforge_password'));

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
		$this->out('<info>Processing 1.0 releases from JoomlaCode</info>');
		$this->processGForgeReleases($this->jc10ReleaseIds);

		$this->out('<info>Processing 1.5 releases from JoomlaCode</info>');
		$this->processGForgeReleases($this->jc15ReleaseIds);

		$this->out('<info>Processing 2.5 releases from JoomlaCode</info>');
		$this->processGForgeReleases($this->jc25ReleaseIds);

		$this->out('<info>Processing 3.x releases from JoomlaCode</info>');
		$this->processGForgeReleases($this->jc3ReleaseIds);

		$this->out('<info>Processing releases from GitHub</info>');
		$this->processGitHubReleases($this->lookup);
	}

	/**
	 * Process an array of GForge release IDs.
	 *
	 * @param   array  $releaseIds  The release IDs to process.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	private function processGForgeReleases(array $releaseIds)
	{
		foreach ($this->gforge->getReleases($releaseIds) as $release)
		{
			$this->out(sprintf('<info>Processing release ID: %s</info>', $release->frs_release_id));

			foreach ($this->gforge->getFilesystemsForRelease($release->frs_release_id) as $filesystem)
			{
				$this->out(sprintf('<info>Processing package: %s</info>', $filesystem->file_name_safe));

				// Try to load the item for this file
				/** @var \Akeeba\ReleaseSystem\Site\Model\Items $itemsModel */
				$itemsModel = $this->container->factory->model('Items');

				if (!$itemsModel->load(['filename' => $filesystem->file_name_safe]))
				{
					$this->out(sprintf('<error>Could not find an item with the filename "%s"</error>', $filesystem->file_name_safe));

					continue;
				}

				$count = $itemsModel->hits;
				$count += $filesystem->download_count;

				try
				{
					$itemsModel->save(['hits' => $count]);
				}
				catch (Exception $e)
				{
					$this->out(sprintf('<error>Error saving the "%1$s" item: %2$s</error>', $filesystem->file_name_safe, $e->getMessage()));
				}
			}
		}
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
		foreach ($releaseIds as $version => $id)
		{
			$this->out(sprintf('<info>Processing version: %s</info>', $version));

			$release = $this->github->repositories->releases->get('joomla', 'joomla-cms', $this->lookup[$version]);

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
