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
 * Reset ARS Item Ordering
 *
 * Run this CLI script after importing all release items to reset the item ordering.
 * ARS sets each new item with `ordering = 1` and increments the order for all existing items.
 * This script will reverse the ordering so that each release's items are ordered in the way they're set in the individual data arrays.
 *
 * @since  1.0
 */
class ResetItemOrdering extends JApplicationCli
{
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
		$options = [
			'host'     => $this->get('host'),
			'user'     => $this->get('user'),
			'password' => $this->get('password'),
			'database' => $this->get('db'),
			'prefix'   => $this->get('dbprefix'),
		];

		$dbClass = $this->get('dbtype') == 'mysqli' ? 'JDatabaseDriverMysqli' : ($this->get('dbtype') == 'pdomysql' ? 'JDatabaseDriverPdomysql' : 'JDatabaseDriverMysqli');

		$db1 = new $dbClass($options);
		$db2 = new $dbClass($options);
		$db3 = new $dbClass($options);

		// Get all of the release IDs
		$releases = $db1->setQuery(
			$db1->getQuery(true)
				->select('id')
				->from('#__ars_releases')
				->order('id ASC')
		)->getIterator();

		foreach ($releases as $release)
		{
			$this->out("<info>Processing release ID {$release->id}</info>");

			$order = 1;

			// Get all of the items for the release
			$items = $db2->setQuery(
				$db2->getQuery(true)
					->select('id')
					->from('#__ars_items')
					->where('release_id = ' . (int) $release->id)
					->order('id ASC')
			)->getIterator();

			foreach ($items as $item)
			{
				$this->out("<info>Processing item ID {$item->id}</info>");

				// Set the ordering for this item
				$db3->setQuery(
					$db3->getQuery(true)
						->update('#__ars_items')
						->set('ordering = ' . (int) $order)
						->where('id = ' . (int) $item->id)
				)->execute();

				$order++;
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
	$app = JApplicationCli::getInstance('ResetItemOrdering');
	set_exception_handler(['ResetItemOrdering', 'handleException']);
	$app->execute();
}
catch (Exception $e)
{
	fwrite(STDOUT, "\nERROR: " . $e->getMessage() . "\n");
	fwrite(STDOUT, "\n" . $e->getTraceAsString() . "\n");

	exit(1);
}
