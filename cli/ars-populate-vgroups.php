<?php
/**
 * ARS Data Importer
 *
 * @copyright  Copyright (C) 2016 Michael Babker. All rights reserved.
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

/**
 * ARS Data Importer
 *
 * This CLI script serves to batch import Joomla's release data into Akeeba Release System
 *
 * @since  1.0
 */
class ImportDownloads extends JApplicationCli
{
	/**
	 * FOF Container reference for ARS
	 *
	 * @var    \FOF30\Container\Container
	 * @since  1.0
	 */
	private $container;

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

		// Get a user object for my account
		$this->loadIdentity($this->platform->getUser('michael.babker'));

		// Load the base language files
		JFactory::getLanguage()->load('lib_joomla', JPATH_ADMINISTRATOR);
		JFactory::getLanguage()->load('com_ars', JPATH_ADMINISTRATOR);
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
		// Get a user object for my account
		$user = $this->platform->getUser('michael.babker');

		// Build our array of visual groups
		$vgroups = [
			// ID: 1
			[
				'title'       => 'Joomla! CMS Downloads',
				'description' => '<p>This group contains all Joomla! CMS Download Categories</p>'
			],
			// ID: 2
			[
				'title'       => 'Joomla! 1.5 Translations',
				'description' => '<p>This group contains all Joomla! 1.5 Translation Categories</p>'
			],
			// ID: 3
			[
				'title'       => 'Joomla! 2.5 Translations',
				'description' => '<p>This group contains all Joomla! 2.5 Translation Categories</p>'
			],
			// ID: 4
			[
				'title'       => 'Joomla! 3 Translations',
				'description' => '<p>This group contains all Joomla! 3 Translation Categories</p>'
			],
			// ID: 5
			[
				'title'       => 'Joomla! Extensions',
				'description' => '<p>This group contains all Joomla! Official Extensions</p>'
			],
			// ID: 6
			[
				'title'       => 'Joomla! 1.0 Translations',
				'description' => '<p>This group contains all Joomla! 1.0 Translation Categories</p>'
			],
			// ID: 7
			[
				'title'       => 'Joomla! 4 Translations',
				'description' => '<p>This group contains all Joomla! 4 Translation Categories</p>'
			],
		];

		// Save our groups
		foreach ($vgroups as $vgroup)
		{
			// Add additional data for the record
			$vgroup = array_merge($vgroup, ['created_by' => $this->getIdentity()->id]);

			/** @var \Akeeba\ReleaseSystem\Site\Model\VisualGroups $vgroupsModel */
			$vgroupsModel = $this->container->factory->model('VisualGroups');

			// Skip loading if it exists
			if ($vgroupsModel->load(['title' => $vgroup['title']]))
			{
				continue;
			}

			try
			{
				$vgroupsModel->save($vgroup);

				$this->out(sprintf('<info>Saved visual group "%s"</info>', $vgroup['title']));
			}
			catch (Exception $e)
			{
				$this->out(sprintf('<error>Error saving visual group "%1$s": %2$s</error>', $vgroup['title'], $e->getMessage()));
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
	$app = JApplicationCli::getInstance('ImportDownloads');
	set_exception_handler(['ImportDownloads', 'handleException']);
	$app->execute();
}
catch (Exception $e)
{
	fwrite(STDOUT, "\nERROR: " . $e->getMessage() . "\n");
	fwrite(STDOUT, "\n" . $e->getTraceAsString() . "\n");

	exit(1);
}
