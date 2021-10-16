<?php
/**
 * ARS Download Repository Generator
 *
 * @copyright  Copyright (C) 2015 George Wilson. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

// MISSING DATA in S3/ARS AS FOLLOWS:
// Joomla 2.5:
// gu-IN, is-IS, ug-CN, fr-CA, en-CA

// Joomla 3.x:
// gd-GB, bn-BD, az-AZ, eo-XX, ckb-IQ, lo-LA, lt-LT, ml-IN, ur-PK, ug-CN, gu-IN, srp-ME, en-CA, fr-CA, de-CH, de-AT, de-LI, de-LU, en-NZ, kk-KZ
// zzobsoletepacks

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
// 		$this->out('<info>Processing 2.5 releases from JoomlaCode</info>');
// 		$this->processGForgeReleases('jtranslation1_6', JFactory::getConfig()->get('tmp_path') . '/joomla25', 'joomla25', 2);

		$this->out('<info>Processing 3.x releases from JoomlaCode</info>');
		$this->processGForgeReleases('jtranslation3_x', JFactory::getConfig()->get('tmp_path') . '/joomla3x', 'joomla3', 1);
	}

	/**
	 * Process an array of GForge release IDs.
	 *
	 * @param   string   $projectId  The name of the project in gforge to process.
	 * @param   string   $tmpDir     The temporary directory to download.
	 * @param   string   $s3Dir      The s3 folder name for this version of Joomla.
	 * @param   integer  $arsEnv     The ARS Environment ID for the version of Joomla
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	private function processGForgeReleases(string $projectId, string $tmpDir, string $s3Dir, int $arsEnv)
	{
		// Ensure temp download directory exists
		\Joomla\CMS\Filesystem\Folder::create($tmpDir);

		$project = $this->gforge->getProject($projectId);
		$packages = $this->gforge->getPackagesFromProject($project->project_id);

		if ($packages === false)
		{
			$this->out(sprintf('<error>No packages found for project "%s"</error>', $projectId));

			return;
		}

		foreach ($packages as $package)
		{
			$packageName = $package->package_name;

			// Package in Joomla 2.5 that is empty. Doesn't follow naming conventions. Skip it.
			if ($packageName === 'Language_resources' && $projectId === 'jtranslation1_6')
			{
				continue;
			}

			// This package doesn't match our naming convention so hardcode a match to follow the rules
			if ($packageName === 'Esperanto_eo-XX_2.5.22_lang_pack' && $projectId === 'jtranslation1_6')
			{
				$packageName = 'Esperanto_eo-XX';
			}

			$explodedName     = explode('_', $packageName);
			$langTag          = array_pop($explodedName);
			$langFriendlyName = implode(' ', $explodedName);
			$this->out(sprintf('<info>Processing language "%s"</info>', $langTag));

			$arsDirectory = 's3://joomladownloads/translations/' . $s3Dir . '/' . $langTag;

			/** @var \Akeeba\ReleaseSystem\Site\Model\Categories $itemsModel */
			$categoriesModel = $this->container->factory->model('Categories');

			// Verify we have an ARS Category for this directory
			if (!$categoriesModel->load(['directory' => $arsDirectory]))
			{
				$this->out(sprintf('<error>No ARS Category found for potential s3 directory "%s". Continuing to next package</error>', $arsDirectory));

				continue;
			}

			// Create tmp dir for a language now we are confident we have a valid s3 Location to upload data to
			\Joomla\CMS\Filesystem\Folder::create($tmpDir . '/' . $langTag);

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
					$createdDate = new \Joomla\CMS\Date\Date($release->release_date);
					$releaseId   = $release->frs_release_id;
					$files       = $this->gforge->getFilesystemsForRelease($releaseId);

					// Check that some files were found
					if ($files === false)
					{
						$this->out(sprintf('<error>No files found for release "%s" in package "%s" (project "%s)". Continuing to next release</error>', $releaseId, $packageId, $projectId));

						continue;
					}

					foreach ($files as $file)
					{
						if ($file->deleted === false && substr($file->file_name, -3) === 'zip'
							&& preg_match('/^' . $langTag . '_joomla_lang_full_[0-9]{1,2}.[0-9]{1,2}.[0-9]{1,2}v[0-9]{1,2}.zip/', $file->file_name) > 0)
						{
							$fileNameInfo = explode('_', $file->file_name);
							$url          = 'http://joomlacode.org' . $file->download_url;
							$fileOnDisk   = $tmpDir . '/' . $langTag . '/' . $file->file_name_safe;

							\Joomla\CMS\Filesystem\File::write($fileOnDisk, fopen($url, 'r'));

							// Format: 2.5.28v3
							$languagePackVersion = substr(array_pop($fileNameInfo), 0, -4);

							// Array. Key 0: joomla version, Key 1: Language Pack Version
							$versionInformation = explode('v', $languagePackVersion);

							// This is actually the same file name as $file->file_name - but we're trying to be extra
							// sure we have the right naming conventions
							$zipName = $langTag . '_joomla_lang_full_' . $versionInformation[0] . 'v' . $versionInformation[1] . '.zip';

							if (!$this->uploadZipToS3($categoriesModel, $zipName, $fileOnDisk))
							{
								// No need to set an error message here as it will be handled inside the function - just bail instead
								continue;
							}

							/** @var \Akeeba\ReleaseSystem\Site\Model\Items $itemsModel */
							$itemsModel = $this->container->factory->model('Items');

							/** @var \Akeeba\ReleaseSystem\Site\Model\Releases $releasesModel */
							$releasesModel   = $this->container->factory->model('Releases');
							$completeVersion = $versionInformation[0] . '.' . $versionInformation[1];

							$arsReleaseData = [
								'category_id' => $categoriesModel->id,
								'version'     => $completeVersion,
								'alias'       => str_replace('.', '-', $completeVersion),
								'maturity'    => 'stable',
								'description' => '<p>This is the ' . $langFriendlyName . ' Language Pack for Joomla! ' . $versionInformation[0],
								'created'     => $createdDate->toSql(),
								'access'      => '1',
							];

							if ($versionInformation[1] === '1')
							{
								$arsReleaseData['description'] .= '</p>';
							}
							else
							{
								$arsReleaseData['description'] .= ' (v' . $versionInformation[1] . ')</p>';
							}

							// Build Item Data (omitting the release ID which will be added after creation)
							$arsItemData = [
								'title'        => 'Joomla! ' . $versionInformation[0] . ' ' . $langFriendlyName . ' ' . $langTag . ' Language Pack (v' . $versionInformation[1] . ')',
								'description'  => '<p>This is the full ' . $langFriendlyName . ' Language Pack for Joomla! ' . $versionInformation[0] . '</p>',
								'type'         => 'file',
								'filename'     => $zipName,
								'environments' => [(string) $arsEnv],
								'created'      => $createdDate->toSql(),
								'access'       => '1',
								'hits'         => $file->download_count,
							];

							// Skip loading if it exists
							if ($releasesModel->load(['category_id' => $arsReleaseData['category_id'], 'version' => $arsReleaseData['version']]))
							{
								$this->out(sprintf('<error>ARS Release already exists for version "%s" in category "%s". Continuing to next file</error>', $arsReleaseData['version'], $arsReleaseData['category_id']));

								continue;
							}

							// Fail saving the item if it already exists in ARS. Whilst it would be good to dual load this with the Release
							// ID to reduce the risk of duplicate titles, we choose to do it here so we don't ever have to roll back the
							// item in case the release is created and item is a duplicate.
							if ($itemsModel->load(['title' => $arsItemData['title']]))
							{
								$this->out(sprintf('<error>ARS Item already exists for "%s". Continuing to next file</error>', $arsItemData['title']));

								continue;
							}

							try
							{
								$releaseData = $releasesModel->save($arsReleaseData);
							}
							catch (Exception $e)
							{
								$this->out(sprintf('<error>Error saving ARS release for version "%s" in category "%s". Continuing to next file: %s</error>', $arsReleaseData['version'], $arsReleaseData['category_id'], $e->getMessage()));

								continue;
							}

							// Add the release ID to the item and save
							$arsItemData['release_id'] = $releaseData->getId();

							try
							{
								$itemsModel->save($arsItemData);
							}
							catch (Exception $e)
							{
								// TODO: Rollback the item creation?
								$this->out(sprintf('<error>Error saving ARS Item for "%s". Continuing to next file: %s</error>', $arsItemData['title'], $e->getMessage()));

								continue;
							}
						}
					}
				}
			}
		}

		// Clean temp download directory
		\Joomla\CMS\Filesystem\Folder::delete($tmpDir);
	}

	/**
	 * Method to generate the translation zip and push it to S3.
	 *
	 * @param   \Akeeba\ReleaseSystem\Site\Model\Categories  $categoriesModel  The ARS Category Model for the release
	 * @param   string                                       $zipName          The name of the file we want to place in
	 *                                                                         S3
	 * @param   string                                       $fileLocation     The name of the file on the filesystem
	 *
	 * @return  boolean  True on success.
	 *
	 * @since   1.0
	 */
	private function uploadZipToS3(\Akeeba\ReleaseSystem\Site\Model\Categories $categoriesModel, string $zipName,
	                                 string $fileLocation)
	{
		$prefix = 's3://';

		// Strip the s3 prefix from the upload key - just how the AWS API works vs what's stored in ARS
		if (strpos($categoriesModel->directory, $prefix) !== 0)
		{
			$this->out(
				'<error>Category ' . $categoriesModel->title . ' does not appear to have an S3 backend</error>'
			);

			return false;
		}

		$s3UploadPath = substr($categoriesModel->directory, strlen($prefix));
		$s3           = \Akeeba\ReleaseSystem\Admin\Helper\AmazonS3::getInstance();
		$success      = $s3->putObject($fileLocation, $s3UploadPath . '/' . $zipName);

		if (!$success)
		{
			$this->out(
				sprintf('<error>Error uploading %s to s3 storage: %s</error>', $fileLocation, $s3->getError())
			);

			return false;
		}

		return true;
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
