<?php
/**
 * Joomla! Downloads API Application
 *
 * @copyright  Copyright (C) 2021 Open Source Matters, Inc. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

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
		$result = [];

		foreach ($items as $item)
		{
			$result[] = ['name' => $item->name, 'languageCode' => $item->lang_code];
		}

		$returnedData = [
			'total' => count($result),
			'languages' => $result,
		];

		// Load the item into the document's buffer
		$this->getApplication()->getDocument()->setBuffer($returnedData);
	}
}
