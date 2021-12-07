<?php
/**
 * Joomla! Downloads API Application
 *
 * @copyright  Copyright (C) 2016 Open Source Matters, Inc. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

use Akeeba\ReleaseSystem\Site\Helper\DownloadCounter;
use FOF30\Container\Container;

/**
 * Controller processing requests for the total downloads count
 *
 * @since  1.0
 */
class ApiControllerBreakdownMajor extends JControllerBase
{
	/**
	 * Execute the controller.
	 *
	 * @return  boolean
	 *
	 * @since   1.0
	 */
	public function execute()
	{
		// This will autoload the ARS files
		Container::getInstance('com_ars');

		// Now get the totals
		$item = [
			'total'    => DownloadCounter::getCountForVgroup(1),
			'branches' => [
				(object) ['version' => '1.0', 'count' => DownloadCounter::getCountForCategory(1)],
				(object) ['version' => '1.5', 'count' => DownloadCounter::getCountForCategory(2)],
				(object) ['version' => '2.5', 'count' => DownloadCounter::getCountForCategory(3)],
				(object) ['version' => '3.0', 'count' => DownloadCounter::getCountForCategory(4)],
			],
		];

		// Load the item into the document's buffer
		$this->getApplication()->getDocument()->setBuffer($item);

		return true;
	}
}
