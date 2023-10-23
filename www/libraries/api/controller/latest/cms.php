<?php
/**
 * Joomla! Downloads API Application
 *
 * @copyright  Copyright (C) 2016 Open Source Matters, Inc. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

use Akeeba\ReleaseSystem\Site\Helper\Filter;
use FOF30\Container\Container;

/**
 * Controller processing requests for the latest CMS versions on each branch
 *
 * @since  1.0
 */
class ApiControllerLatestCms extends JControllerBase
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
		$container = Container::getInstance('com_ars');

		/** @var \Akeeba\ReleaseSystem\Site\Model\Releases $releasesModel */
		$releasesModel = $container->factory->model('Releases');
		$releasesModel->reset(true)
			->orderby_filter('order')
			->published(1)
			->latest(true)
			->access_user($container->platform->getUser()->id)
			->category_id(0)
			->maturity('stable')
			->with(['items']);

		/** @var \Akeeba\ReleaseSystem\Site\Model\Categories $categoriesModel */
		$categoriesModel = $container->factory->model('Categories');
		$categoriesModel->reset(true)
			->orderby_filter('order')
			->published(1)
			->vgroup(1)
			->access_user($container->platform->getUser()->id)
			->with([]);

		// Assign data to the view, part 1 (we need this later on)
		$categories = $categoriesModel->get(true)->filter(function ($item)
		{
			return Filter::filterItem($item, true);
		});

        $validCategories = [];

        foreach ($categories as $category)
        {
			$validCategories[] = $category->id;
        }
$validCategories[] = 353;

		$releases = $releasesModel->get(true);

		$latest = [];

		if ($releases->count())
		{
			/** @var \Akeeba\ReleaseSystem\Site\Model\Releases $release */
			foreach ($releases as $release)
			{
				$latest[$release->category_id] = $release;
			}
		}

		// Sort by category ID
		ksort($latest);

		// Build the response object now
		$branches = [];

		foreach ($latest as $catId => $release)
		{
			if (!in_array($catId, $validCategories))
			{
				continue;
			}

			$branches[] = ['branch' => $release->category->title, 'version' => $release->version];
		}

		// Now build the response
		$item = [
			'branches' => $branches,
		];

		// Load the item into the document's buffer
		$this->getApplication()->getDocument()->setBuffer($item);

		// Allow the response to be cached
		$this->getApplication()->allowCache(true);

		return true;
	}
}
