<?php
/**
 * Joomla CMS Release Script
 *
 * @copyright  Copyright (C) 2021 George Wilson. All rights reserved.
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
class JoomlaRelease extends JApplicationCli
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
		$releaseNumber = $this->input->getCmd('releaseVersion');
		$releaseUrl    = $this->input->getString('releaseUrl');
		$userId        = $this->input->getCmd('userId');

		if (!$releaseNumber)
		{
			$this->out(sprintf('<error>Release was not passed into the application</error>'));

			return;
		}

		if (!$releaseUrl || strpos($releaseUrl, 'https://www.joomla.org') !== 0)
		{
			$this->out(sprintf('<error>Release URL is not for Joomla.org</error>'));

			return;
		}

		if (!$userId)
		{
			$this->out(sprintf('<error>Username must be based into the application</error>'));

			return;
		}

		// Get a user object for my account
		$this->loadIdentity($this->platform->getUser($userId));

		$releaseParts = explode('.', $releaseNumber);
		$releaseAliasNumber = str_replace('.', '-', $releaseNumber);
		$currentSqlDate = $this->platform->getDate()->toSql();

		switch ($releaseParts[0])
		{
			case '4':
				$arsCategoryId = '268';
				$arsEnvironment = '12';
				break;

			case '3':
				$arsCategoryId = '4';
				$arsEnvironment = '9';
				break;

			default:
				$this->out(sprintf('<error>You should not be releasing a lower version of Joomla</error>'));
				return;
		}

		$release = 	[
			'category_id'      => $arsCategoryId,
			'version'          => $releaseNumber,
			'alias'            => $releaseAliasNumber,
			'maturity'         => 'stable',
			'description'      => '<p>Joomla! ' . $releaseNumber . ' release</p>',
			'created'          => $currentSqlDate,
			'announcement_url' => $releaseUrl,
			'created_by'       => $this->identity->id,
			'published'        => false,
			'access'           => 1,
		];

		/** @var \Akeeba\ReleaseSystem\Site\Model\Releases $releasesModel */
		$releasesModel = $this->container->factory->model('Releases');

		// Skip loading if it exists
		if ($releasesModel->load(['category_id' => $release['category_id'], 'version' => $release['version']]))
		{
			$this->out(sprintf('<info>Release %s already exists</info>', $release['version']));

			return;
		}

		try
		{
			$releaseData = $releasesModel->save($release);

			$this->out(sprintf('<info>Saved %s release</info>', $release['version']));
		}
		catch (Exception $e)
		{
			$this->out(sprintf('<error>Error saving %1$s release: %2$s</error>', $release['version'], $e->getMessage()));

			return;
		}

		// TODO: Fix the ordering in a better way!
		$items = [
			[
				'title'        => "Joomla! $releaseNumber Full Package (.zip)",
				'alias'        => "Joomla_$releaseAliasNumber-Stable-Full_Package.zip",
				'description'  => "<p>This is the full download package for Joomla! $releaseNumber</p>",
				'type'         => 'file',
				'filename'     => "Joomla_$releaseNumber-Stable-Full_Package.zip",
				'ordering'     => 12,
			],
			[
				'title'        => "Joomla! $releaseNumber Full Package (.tar.gz)",
				'alias'        => "Joomla_$releaseAliasNumber-Stable-Full_Package.tar.gz",
				'description'  => "<p>This is the full download package for Joomla! $releaseNumber</p>",
				'type'         => 'file',
				'filename'     => "Joomla_$releaseNumber-Stable-Full_Package.tar.gz",
				'ordering'     => 11,
			],
			[
				'title'        => "Joomla! $releaseNumber Full Package (.tar.bz2)",
				'alias'        => "Joomla_$releaseAliasNumber-Stable-Full_Package.tar.bz2",
				'description'  => "<p>This is the full download package for Joomla! $releaseNumber</p>",
				'type'         => 'file',
				'filename'     => "Joomla_$releaseNumber-Stable-Full_Package.tar.bz2",
				'ordering'     => 10,
			],
			[
				'title'        => "Joomla! $releaseNumber Upgrade Package (.zip)",
				'alias'        => "Joomla_$releaseAliasNumber-Stable-Update_Package.zip",
				'description'  => "<p>This package is for performing updates from Joomla! 3.10 and previous 4.x releases to $releaseNumber.</p>",
				'type'         => 'file',
				'filename'     => "Joomla_$releaseNumber-Stable-Update_Package.zip",
				'ordering'     => 9,
			],
			[
				'title'        => "Joomla! $releaseNumber Upgrade Package (.tar.gz)",
				'alias'        => "Joomla_$releaseAliasNumber-Stable-Update_Package.tar.gz",
				'description'  => "<p>This package is for performing updates from Joomla! 3.10 and previous 4.x releases to $releaseNumber.</p>",
				'type'         => 'file',
				'filename'     => "Joomla_$releaseNumber-Stable-Update_Package.tar.gz",
				'ordering'     => 8,
			],
			[
				'title'        => "Joomla! $releaseNumber Upgrade Package (.tar.bz2)",
				'alias'        => "Joomla_$releaseAliasNumber-Stable-Update_Package.tar.bz2",
				'description'  => "<p>This package is for performing updates from Joomla! 3.10 and previous 4.x releases to $releaseNumber.</p>",
				'type'         => 'file',
				'filename'     => "Joomla_$releaseNumber-Stable-Update_Package.tar.bz2",
				'ordering'     => 7,
			],
		];

		if ($releaseParts[2] !== '0')
		{
			$items[] = [
				'title'        => "Joomla! $releaseParts[0].$releaseParts[1].x to $releaseNumber Patch Package (.zip)",
				'alias'        => "Joomla_$releaseParts[0]-$releaseParts[1]-x_to_$releaseAliasNumber-Stable-Patch_Package.zip",
				'description'  => "<p>This package is for performing updates from Joomla! $releaseParts[0].$releaseParts[1].x to $releaseNumber</p>",
				'type'         => 'file',
				'filename'     => "Joomla_$releaseParts[0].$releaseParts[1].x_to_$releaseNumber-Stable-Patch_Package.zip",
				'ordering'     => 6,
			];
			$items[] = [
				'title'        => "Joomla! $releaseParts[0].$releaseParts[1].x to $releaseNumber Patch Package (.tar.gz)",
				'alias'        => "Joomla_$releaseParts[0]-$releaseParts[1]-x_to_$releaseAliasNumber-Stable-Patch_Package.tar.gz",
				'description'  => "<p>This package is for performing updates from Joomla! $releaseParts[0].$releaseParts[1].x to $releaseNumber</p>",
				'type'         => 'file',
				'filename'     => "Joomla_$releaseParts[0].$releaseParts[1].x_to_$releaseNumber-Stable-Patch_Package.tar.gz",
				'ordering'     => 5,
			];
			$items[] = [
				'title'        => "Joomla! $releaseParts[0].$releaseParts[1].x to $releaseNumber Patch Package (.tar.bz2)",
				'alias'        => "Joomla_$releaseParts[0]-$releaseParts[1]-x_to_$releaseAliasNumber-Stable-Patch_Package.tar.bz2",
				'description'  => "<p>This package is for performing updates from Joomla! $releaseParts[0].$releaseParts[1].x to $releaseNumber</p>",
				'type'         => 'file',
				'filename'     => "Joomla_$releaseParts[0].$releaseParts[1].x_to_$releaseNumber-Stable-Patch_Package.tar.bz2",
				'ordering'     => 4,
			];
		}

		if ($releaseParts[2] !== '0' && $releaseParts[2] !== '1')
		{
			$previousPatchNumber = $releaseParts[2] - 1;

			$items[] = [
				'title'        => "Joomla! $releaseParts[0].$releaseParts[1].$previousPatchNumber to $releaseNumber Patch Package (.zip)",
				'alias'        => "Joomla_$releaseParts[0]-$releaseParts[1]-${previousPatchNumber}_to_$releaseAliasNumber-Stable-Patch_Package.zip",
				'description'  => "<p>This package is for performing updates from Joomla! $releaseParts[0].$releaseParts[1].$previousPatchNumber to $releaseNumber.</p>",
				'type'         => 'file',
				'filename'     => "Joomla_$releaseParts[0].$releaseParts[1].${previousPatchNumber}_to_$releaseNumber-Stable-Patch_Package.zip",
				'ordering'     => 3
			];
			$items[] = [
				'title'        => "Joomla! $releaseParts[0].$releaseParts[1].$previousPatchNumber to $releaseNumber Patch Package (.tar.gz)",
				'alias'        => "Joomla_$releaseParts[0]-$releaseParts[1]-${previousPatchNumber}_to_$releaseAliasNumber-Stable-Patch_Package.tar.gz",
				'description'  => "<p>This package is for performing updates from Joomla! $releaseParts[0].$releaseParts[1].$previousPatchNumber to $releaseNumber.</p>",
				'type'         => 'file',
				'filename'     => "Joomla_$releaseParts[0].$releaseParts[1].${previousPatchNumber}_to_$releaseNumber-Stable-Patch_Package.tar.gz",
				'ordering'     => 2
			];
			$items[] = [
				'title'        => "Joomla! $releaseParts[0].$releaseParts[1].$previousPatchNumber to $releaseNumber Patch Package (.tar.bz2)",
				'alias'        => "Joomla_$releaseParts[0]-$releaseParts[1]-${previousPatchNumber}_to_$releaseAliasNumber-Stable-Patch_Package.tar.bz2",
				'description'  => "<p>This package is for performing updates from Joomla! $releaseParts[0].$releaseParts[1].$previousPatchNumber to $releaseNumber.</p>",
				'type'         => 'file',
				'filename'     => "Joomla_$releaseParts[0].$releaseParts[1].${previousPatchNumber}_to_$releaseNumber-Stable-Patch_Package.tar.bz2",
				'ordering'     => 1
			];
		}

		foreach ($items as $item)
		{
			$mainReleaseMetadata = [
				'environments' => [$arsEnvironment],
				'release_id'   => $releaseData->getId(),
				'created'      => $currentSqlDate,
				'modified'     => $currentSqlDate,
				'access'       => '1',
				'created_by'   => $this->identity->id,
			];

			// Add additional data for the record
			$item = array_merge($item, $mainReleaseMetadata);

			/** @var \Akeeba\ReleaseSystem\Site\Model\Items $itemsModel */
			$itemsModel = $this->container->factory->model('Items');

			// Skip loading if it exists
			if ($itemsModel->load(['title' => $item['title']]))
			{
				continue;
			}

			try
			{
				$itemsModel->save($item);

				$this->out(sprintf('<info>Saved item "%s"</info>', $item['title']));
			}
			catch (Exception $e)
			{
				$this->out(sprintf('<error>Error saving the "%1$s" item: %2$s</error>', $item['title'], $e->getMessage()));
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
	$app = JApplicationCli::getInstance('JoomlaRelease');
	set_exception_handler(['JoomlaRelease', 'handleException']);
	$app->execute();
}
catch (Exception $e)
{
	fwrite(STDOUT, "\nERROR: " . $e->getMessage() . "\n");
	fwrite(STDOUT, "\n" . $e->getTraceAsString() . "\n");

	exit(1);
}
