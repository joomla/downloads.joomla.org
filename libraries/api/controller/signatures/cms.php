<?php
/**
 * Joomla! Downloads API Application
 *
 * @copyright  Copyright (C) 2016 Open Source Matters, Inc. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

use FOF30\Container\Container;

/**
 * Controller processing requests for the hash signatures for a CMS release
 *
 * @since  1.0
 */
class ApiControllerSignaturesCms extends JControllerBase
{
	/**
	 * Execute the controller.
	 *
	 * @return  boolean
	 *
	 * @since   1.0
	 * @throws  InvalidArgumentException when the specified version does not exist
	 */
	public function execute()
	{
		// This will autoload the ARS files
		$container = Container::getInstance('com_ars');

		$version = $this->getInput()->getString('version');

		/** @var \Akeeba\ReleaseSystem\Site\Model\Releases $releasesModel */
		$releasesModel = $container->factory->model('Releases');

		if (!$releasesModel->load(['alias' => $version]))
		{
			throw new InvalidArgumentException('Version not found', 404);
		}

		$files = [];

		/** @var \Akeeba\ReleaseSystem\Site\Model\Items $item */
		foreach ($releasesModel->items as $item)
		{
			$files[] = (object) ['filename' => $item->filename, 'md5' => $item->md5, 'sha1' => $item->sha1];
		}

		// Now build the response
		$item = [
			'files' => $files,
		];

		// Load the item into the document's buffer
		$this->getApplication()->getDocument()->setBuffer($item);

		return true;
	}
}
