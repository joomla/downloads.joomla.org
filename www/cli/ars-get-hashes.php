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

// Max memory
ini_set('memory_limit', '-1');

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
 * This CLI script serves to generate the hash data for an ARS Release's items
 *
 * @since  1.0
 */
class HashGenerator extends JApplicationCli
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
		$this->loadIdentity($this->platform->getUser('harald.leithner'));

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
		$releaseId = $this->input->getInt('release');

		if (!$releaseId)
		{
			$this->out('<error>Release ID required</error>');

			return;
		}

		/** @var \Akeeba\ReleaseSystem\Site\Model\Releases $releasesModel */
		$releasesModel = $this->container->factory->model('Releases');

		// Skip loading if it exists
		if (!$releasesModel->load($releaseId))
		{
			$this->out('<error>Release not found</error>');

			return;
		}

		$folder = $releasesModel->category->directory;

		$s3 = \Akeeba\ReleaseSystem\Admin\Helper\AmazonS3::getInstance();
		$check = substr($folder, 5);

		$items = $s3->getBucket('', rtrim($check, '/') . '/');

		if (empty($items))
		{
			$this->out('<error>Could not get items from S3</error>');

			return;
		}

		$target = JFactory::getConfig()->get('tmp_path') . '/temp.dat';

		jimport('joomla.filesystem.file');

		/** @var \Akeeba\ReleaseSystem\Site\Model\Items $item */
		foreach ($releasesModel->items as $item)
		{
			$filename = $item->filename;
			$url      = $s3->getAuthenticatedURL(rtrim(substr($folder, 5), '/') . '/' . ltrim($filename, '/'));

			if (!$url)
			{
				$this->out(sprintf('<error>Could not get a download URL for the "%1$s" item</error>', $filename));

				continue;
			}

			JInstallerHelper::downloadPackage($url, $target);

			if (!JFile::exists($target))
			{
				$this->out(sprintf('<error>The "%1$s" item was not saved successfully</error>', $filename));

				continue;
			}

			$data = [];

			if (function_exists('hash_file'))
			{
				$data['md5']    = hash_file('md5', $target);
				$data['sha1']   = hash_file('sha1', $target);
				$data['sha256'] = hash_file('sha256', $target);
				$data['sha384'] = hash_file('sha384', $target);
				$data['sha512'] = hash_file('sha512', $target);
			}
			else
			{
				$data['md5']  = md5_file($target);
				$data['sha1'] = sha1_file($target);
			}

			$filesize = @filesize($target);

			if ($filesize !== false)
			{
				$data['filesize'] = $filesize;
			}

			JFile::delete($target);

			try
			{
				$item->save($data);

				$this->out(sprintf('<info>Saved item "%s"</info>', $filename));
			}
			catch (Exception $e)
			{
				$this->out(sprintf('<error>Error saving the "%1$s" item: %2$s</error>', $filename, $e->getMessage()));
			}

			clearstatcache();
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
	$app = JApplicationCli::getInstance('HashGenerator');
	set_exception_handler(['HashGenerator', 'handleException']);
	$app->execute();
}
catch (Exception $e)
{
	fwrite(STDOUT, "\nERROR: " . $e->getMessage() . "\n");
	fwrite(STDOUT, "\n" . $e->getTraceAsString() . "\n");

	exit(1);
}
