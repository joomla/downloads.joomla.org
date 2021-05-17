<?php
/**
 * Joomla! Downloads API Application
 *
 * @copyright  Copyright (C) 2021 Open Source Matters, Inc. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

use FOF30\Container\Container;

/**
 * Controller processing requests for the available Languages for each Application
 *
 * @since  1.0
 */
class ApiControllerLanguagesBreakdown extends JControllerBase
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
		$languageCode = $this->getInput()->getCmd('language_code');

		if (!isset($mapping[$majorVersion]))
		{
			throw new InvalidArgumentException('Version branch not found', 400);
		}

		$db           = \JFactory::getDbo();
		$arsContainer = Container::getInstance('com_ars');

		// TODO: Move this to a language pack component model...
		$query = $db->getQuery(true)
			->select($db->quoteName('a.ars_category'))
			->from($db->quoteName('#__languagepack_languages', 'a'))
			->rightJoin($db->quoteName('#__languagepack_applications', 'b') . ' ON ' . $db->quoteName('b.id') . ' = ' . $db->quoteName('a.application_id'))
			->where($db->quoteName('a.application_id') . ' = ' . (int) $mapping[$majorVersion])
			->where($db->quoteName('a.lang_code') . ' = ' . $db->quote($languageCode))
			->where('a.state = ' . 1)
			->where('b.state = ' . 1);

		$db->setQuery($query);
		$arsCategoryId = $db->loadResult();

		/** @var \Akeeba\ReleaseSystem\Admin\Model\Releases $model */
		$model = $arsContainer->factory->model('Releases')->tmpInstance();

		/** @var \FOF30\Model\DataModel\Collection $releases */
		$releases = $model->reset(true)
			->category_id(['value' => $arsCategoryId, 'method' => 'exact'])
			->published(1)
			->access_user($arsContainer->platform->getUser()->id)
			->with(['items', 'category'])
			->get(true);

		$totalReleases = $releases->count();
		$versions      = [];
		$rootURL	   = rtrim(\JUri::root(), '/');

		if ($totalReleases)
		{
			/** @var \Akeeba\ReleaseSystem\Admin\Model\Releases $release */
			foreach ($releases as $release)
			{
				$version = [
					'name' => $release->category->title,
					'description' => $release->description,
					'version' => $release->version,
					'downloads' => [],
				];

				foreach ($release->items as $item)
				{
					if ($item->type !== 'file')
					{
						continue;
					}

					$downloadUrl = \JRoute::_('index.php?option=com_ars&view=Item&task=download&format=raw&id=' . $item->id . '&Itemid=' . 677);

					$version['downloads'][] = [
						'filename' => $rootURL . $downloadUrl,
						'md5' => $item->md5,
						'sha1' => $item->sha1,
						'sha256' => $item->sha256,
						'sha384' => $item->sha384,
						'sha512' => $item->sha512,
					];
				}

				$versions[] = $version;
			}
		}

		$returnedData = [
			'total' => $totalReleases,
			'versions' => $versions,
		];

		// Load the item into the document's buffer
		$this->getApplication()->getDocument()->setBuffer($returnedData);
	}
}
