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

/**
 * ARS Download Repository Generator
 *
 * This CLI script serves to batch generate the Amazon S3 filesystem for Joomla's downloads
 *
 * @since  1.0
 */
class GenerateRepository extends JApplicationCli
{
	/**
	 * FOF Container reference for ARS
	 *
	 * @var    \FOF30\Container\Container
	 * @since  1.0
	 */
	private $container;

	/**
	 * Array containing all of the originally imported languages
	 *
	 * @var    array
	 * @since  1.0
	 */
	private $languages = [
		'joomla15' => [
			'af-ZA', 'sq-AL', 'ar-AA', 'az-AZ', 'be-BY', 'bn-BD', 'bs-BA', 'bg-BG', 'ca-ES', 'zh-CN', 'zh-TW', 'hr-HR',
			'cs-CZ', 'da-DK', 'fa-AF', 'nl-NL', 'en-AU', 'en-US', 'eo-XX', 'et-EE', 'fi-FI', 'fr-FR', 'gl-ES', 'ka-GE',
			'de-DE', 'el-GR', 'gu-IN', 'he-IL', 'hi-IN', 'hu-HU', 'is-IS', 'id-ID', 'it-IT', 'ja-JP', 'km-KH', 'lo-LA',
			'lv-LV', 'lt-LT', 'mk-MK', 'ms-MY', 'ml-IN', 'mn-MN', 'sr-ME', 'nb-NO', 'ps-AF', 'fa-IR', 'pl-PL', 'pt-BR',
			'pt-PT', 'ro-RO', 'ru-RU', 'sr-RS', 'sd-PK', 'si-LK', 'sk-SK', 'sl-SI', 'es-ES', 'sv-SE', 'sy-IQ', 'tl-PH',
			'ta-IN', 'ta-LK', 'th-TH', 'tr-TR', 'uk-UA', 'ur-PK', 'vi-VN'
		],
		'joomla25' => [
			'af-ZA', 'sq-AL', 'ar-AA', 'hy-AM', 'az-AZ', 'eu-ES', 'be-BY', 'bn-BD', 'bs-BA', 'bg-BG', 'ca-ES', 'ckb-IQ',
			'zh-CN', 'zh-TW', 'hr-HR', 'cs-CZ', 'da-DK', 'nl-NL', 'en-AU', 'en-US', 'eo-XX', 'et-EE', 'fi-FI', 'nl-BE',
			'fr-FR', 'gl-ES', 'ka-GE', 'de-DE', 'el-GR', 'he-IL', 'hi-IN', 'hu-HU', 'id-ID', 'it-IT', 'ja-JP', 'km-KH',
			'ko-KR', 'lo-LA', 'lv-LV', 'lt-LT', 'mk-MK', 'ml-IN', 'mn-MN', 'nb-NO', 'nn-NO', 'fa-IR', 'pl-PL', 'pt-BR',
			'pt-PT', 'ro-RO', 'ru-RU', 'gd-GB', 'sr-RS', 'sr-YU', 'sk-SK', 'es-ES', 'sw-KE', 'sv-SE', 'sy-IQ', 'ta-IN',
			'th-TH', 'tr-TR', 'uk-UA', 'ur-PK', 'ug-CN', 'vi-VN', 'cy-GB'
		],
		'joomla3'  => [
			'af-ZA', 'sq-AL', 'ar-AA', 'be-BY', 'bs-BA', 'bg-BG', 'ca-ES', 'ckb-IQ', 'zh-CN', 'zh-TW', 'hr-HR', 'cs-CZ',
			'da-DK', 'nl-NL', 'en-AU', 'en-CA', 'en-US', 'et-EE', 'fi-FI', 'nl-BE', 'fr-CA', 'fr-FR', 'gl-ES', 'de-DE',
			'el-GR', 'he-IL', 'hi-IN', 'hu-HU', 'id-ID', 'it-IT', 'ja-JP', 'ko-KR', 'lv-LV', 'mk-MK', 'mn-MN', 'ms-MY',
			'srp-ME', 'nb-NO', 'fa-IR', 'pl-PL', 'pt-BR', 'pt-PT', 'ro-RO', 'ru-RU', 'sr-RS', 'sr-YU', 'si-LK', 'sk-SK',
			'es-ES', 'sw-KE', 'sv-SE', 'sy-IQ', 'ta-IN', 'th-TH', 'tr-TR', 'uk-UA', 'ug-CN', 'vi-VN', 'cy-GB', 'hy-AM',
			'eu-ES', 'prs-AF', 'dz-BT', 'ka-GE', 'ga-IE', 'km-KH', 'nn-NO', 'sl-SI', 'es-CO', 'tk-TM',
		],
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
		// Make sure the S3 Helper is loaded
		if (!class_exists('\Akeeba\ReleaseSystem\Admin\Helper\AmazonS3'))
		{
			require_once JPATH_ADMINISTRATOR . '/components/com_ars/Helper/AmazonS3.php';
		}

		// The base bucket path for the translations
		$base = 'joomladownloads/translations/';

		$container = [
			'joomla3' => []
		];

		$s3 = \Akeeba\ReleaseSystem\Admin\Helper\AmazonS3::getInstance();

		foreach ($container as $version => $folders)
		{
			$path = $base . $version . '/';

			foreach ($folders as $folder)
			{
				$langDir = $path . $folder . '/';

				$this->out('Processing ' . $langDir);

				$status = $s3->putObject('$folder$', $langDir, true);

				if (!$status)
				{
					$this->out(
						sprintf(
							'An error occurred creating the %1$s folder: %2$s',
							$langDir,
							$s3->getError()
						)
					);
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
	$app = JApplicationCli::getInstance('GenerateRepository');
	set_exception_handler(['GenerateRepository', 'handleException']);
	$app->execute();
}
catch (Exception $e)
{
	fwrite(STDOUT, "\nERROR: " . $e->getMessage() . "\n");
	fwrite(STDOUT, "\n" . $e->getTraceAsString() . "\n");

	exit(1);
}
