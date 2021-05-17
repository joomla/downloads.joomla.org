<?php
/**
 * Joomla! Downloads API Application
 *
 * @copyright  Copyright (C) 2021 Open Source Matters, Inc. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

use FOF30\Container\Container;

\JModelLegacy::addIncludePath(JPATH_SITE . '/components/com_languagepack/models', 'LanguagepackModel');

/**
 * Controller processing requests for the available Languages for each Application
 *
 * @since  1.0
 */
class ApiControllerLanguagesByversion extends JControllerBase
{
	/**
	 * Execute the controller.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 * @throws  \InvalidArgumentException
	 */
	public function execute()
	{
		$mapping = [
			10 => 1,
			15 => 2,
			25 => 3,
			30 => 4,
			40 => 5,
		];

		$majorVersion = $this->getInput()->getInt('cms_version');

		if (!isset($mapping[$majorVersion]))
		{
			throw new InvalidArgumentException('Version branch not found', 400);
		}

		$model = \JModelLegacy::getInstance('Application', 'LanguagepackModel', array('ignore_request' => true));
		$model->setState('application_id', $mapping[$majorVersion]);
		$items  = $model->getItems();
		$results = [];
		$arsContainer = Container::getInstance('com_ars');

		/** @var \Akeeba\ReleaseSystem\Admin\Model\Releases $model */
		$model = $arsContainer->factory->model('Releases')->tmpInstance();

		$model->reset(true)
			->published(1)
			->latest(true)
			->access_user($arsContainer->platform->getUser()->id)
			->with(['items', 'category']);

		/** @var \FOF30\Model\DataModel\Collection $releases */
		$releases = $model->get(true)->filter(function ($item)
		{
			return \Akeeba\ReleaseSystem\Site\Helper\Filter::filterItem($item, true);
		});

		$categoryLatest = [];

		if ($releases->count())
		{
			/** @var \Akeeba\ReleaseSystem\Admin\Model\Releases $release */
			foreach ($releases as $release)
			{
				$categoryLatest[ $release->category->id ]    = $release->getData();
			}
		}

		foreach ($items as $item)
		{
			// If we don't have an available release on ARS don't return it...
			// In the future we may want to make this access level driven
			if (!array_key_exists($item->ars_category, $categoryLatest))
			{
				continue;
			}

			$result = ['name' => $item->name, 'languageCode' => $item->lang_code, 'latestVersion' => $categoryLatest[$item->ars_category]['version']];

			$results[] = $result;
		}

		$returnedData = [
			'total' => count($results),
			'languages' => $results,
		];

		// Load the item into the document's buffer
		$this->getApplication()->getDocument()->setBuffer($returnedData);
	}
}
