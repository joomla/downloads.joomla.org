<?php
/**
 * Joomla! Downloads API Application
 *
 * @copyright  Copyright (C) 2016 Open Source Matters, Inc. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

/**
 * Controller processing requests for the total downloads count for a Joomla release branch
 *
 * @since  1.0
 */
class ApiControllerBreakdownMinor extends JControllerBase
{
	/**
	 * Execute the controller.
	 *
	 * @return  boolean
	 *
	 * @since   1.0
	 * @throws  InvalidArgumentException when the specified version branch does not exist
	 */
	public function execute()
	{
		// This will autoload the ARS files
		$container = FOF30\Container\Container::getInstance('com_ars');

		$mapping = [
			10 => 1,
			15 => 2,
			25 => 3,
			30 => 4,
		];

		$majorVersion = $this->getInput()->getInt('version');

		if (!isset($mapping[$majorVersion]))
		{
			throw new InvalidArgumentException('Version branch not found', 404);
		}

		$categoryId = $mapping[$majorVersion];

		$categoryTotal = Akeeba\ReleaseSystem\Site\Helper\DownloadCounter::getCountForCategory($categoryId);

		/** @var \Akeeba\ReleaseSystem\Site\Model\Categories $categoriesModel */
		$categoriesModel = $container->factory->model('Categories');
		$counts = [];

		if (!$categoriesModel->load($categoryId))
		{
			throw new InvalidArgumentException('Version branch not found', 404);
		}

		$categoriesModel->limitstart(0)
			->limit(0)
			->published(1)
			->access_user($container->platform->getUser()->id);

		/** @var \Akeeba\ReleaseSystem\Site\Model\Releases $release */
		foreach ($categoriesModel->releases as $release)
		{
			$totalCount = 0;

			foreach ($release->items as $item)
			{
				$totalCount += $item->hits;
			}

			$counts[] = (object) ['version' => $release->version, 'count' => $totalCount];
		}

		$item = [
			'total'    => $categoryTotal,
			'versions' => $counts,
		];

		// Load the item into the document's buffer
		$this->getApplication()->getDocument()->setBuffer($item);

		return true;
	}
}
