<?php
/**
 * Joomla! Downloads API Application
 *
 * @copyright  Copyright (C) 2016 Open Source Matters, Inc. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

/**
 * Controller processing requests for the CMS release list
 *
 * @since  1.0
 */
class ApiControllerReleasesCms extends JControllerBase
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
		$container = FOF30\Container\Container::getInstance('com_ars');

		/** @var \Akeeba\ReleaseSystem\Site\Model\Releases $releasesModel */
		$releasesModel = $container->factory->model('Releases');
		$releasesModel->reset(true)
			->orderBy('order', 'DESC')
			->published(1)
			->access_user($container->platform->getUser()->id)
			->category_id(0)
			->maturity('stable');

		$releases = $releasesModel->get(true);

		$releaseList = [];

		// Prepare signature link
		$signatureLink = JUri::base() . "v1/signatures/cms/%s";

		// Process release list
		if ($releases->count())
		{
			/** @var \Akeeba\ReleaseSystem\Site\Model\Releases $release */
			foreach ($releases as $release)
			{
				// Create new DateTime object to convert release date to swagger-compatible format
				$releaseDate = new DateTime($release->created, new DateTimeZone('UTC'));

				$releaseList[] = [
					'version' => $release->version,
					'branch' => $release->category->title,
					'date' => $releaseDate->format(DateTime::RFC3339),
					'relationships' => [
						'signatures' => sprintf($signatureLink, $release->alias)
					]
				];
			}
		}

		// Now build the response
		$item = [
			'total' => $releases->count(),
			'releases' => $releaseList
		];

		// Load the item into the document's buffer
		$this->getApplication()->getDocument()->setBuffer($item);

		return true;
	}
}
