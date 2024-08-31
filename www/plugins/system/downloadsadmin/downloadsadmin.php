<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.DownloadsAdmin
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\Registry\Registry;

/**
 * System plugin for the Joomla! Downloads Site
 *
 * @since  1.0
 */
class PlgSystemDownloadsAdmin extends JPlugin
{
	/**
	 * Application object
	 *
	 * @var    JApplicationCms
	 * @since  1.0
	 */
	protected $app;

	/**
	 * Should this plugin be allowed to run? True if FOF can be loaded and the ARS component is enabled
	 *
	 * @var    boolean
	 * @since  1.0
	 */
	private $fofEnabled = true;

	/**
	 * Constructor.
	 *
	 * @param   object  &$subject  The object to observe.
	 * @param   array   $config    An optional associative array of configuration settings.
	 *
	 * @since   1.0
	 */
	public function __construct(&$subject, $config = array())
	{
		parent::__construct($subject, $config);

		if (!defined('FOF30_INCLUDED') && !@include_once(JPATH_LIBRARIES . '/fof30/include.php'))
		{
			$this->fofEnabled = false;
		}

		if (!JComponentHelper::isEnabled('com_ars'))
		{
			$this->fofEnabled = false;
		}
	}

	/**
	 * Listener for the `onGetStats` event
	 *
	 * @param   string  $context  The event context
	 *
	 * @return  array
	 *
	 * @since   1.0
	 */
	public function onGetStats($context)
	{
		if (!$this->fofEnabled)
		{
			return [];
		}

		if ($context !== 'mod_stats_admin')
		{
			return [];
		}

		// Make sure our auto-loader is set up and ready
		\FOF30\Container\Container::getInstance('com_ars');

		$this->loadLanguage();

		return [
			[
				'title' => JText::_('PLG_SYSTEM_DOWNLOADSADMIN_CMS_DOWNLOAD_COUNT'),
				'data'  => number_format(
					\Akeeba\ReleaseSystem\Site\Helper\DownloadCounter::getCountForVgroup(1),
					0,
					JText::_('DECIMALS_SEPARATOR'),
					JText::_('THOUSANDS_SEPARATOR')
				),
				'icon'  => 'download',
			],
			[
				'title' => JText::_('PLG_SYSTEM_DOWNLOADSADMIN_IFW_DOWNLOAD_COUNT'),
				'data'  => number_format(
					\Akeeba\ReleaseSystem\Site\Helper\DownloadCounter::getCountForCategory(208),
					0,
					JText::_('DECIMALS_SEPARATOR'),
					JText::_('THOUSANDS_SEPARATOR')
				),
				'icon'  => 'download',
			],
			[
				'title' => JText::_('PLG_SYSTEM_DOWNLOADSADMIN_WEBLINKS_DOWNLOAD_COUNT'),
				'data'  => number_format(
					\Akeeba\ReleaseSystem\Site\Helper\DownloadCounter::getCountForCategory(207),
					0,
					JText::_('DECIMALS_SEPARATOR'),
					JText::_('THOUSANDS_SEPARATOR')
				),
				'icon'  => 'download',
			],
		];
	}

	/**
	 * Add alternative meta tags for associated menu items to ARS pages
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onAfterDispatch()
	{
		$this->handleLanguagePackPathways();

		if (!JLanguageMultilang::isEnabled())
		{
			return;
		}

		// We need the languagefilter plugin's parameters to make some decisions
		$langFilterParams = new Registry(JPluginHelper::getPlugin('system', 'languagefilter')->params);

		if ($this->app->isClient('site') && $langFilterParams->get('alternate_meta') && $this->app->getDocument()->getType() == 'html')
		{
			$menu   = $this->app->getMenu();
			$active = $menu->getActive();

			// End processing if we don't have an active menu item or the item doesn't belong to ARS
			if (!$active || $active->component !== 'com_ars')
			{
				return;
			}

			// We need to get all of the observers out of the event dispatcher so we can find an instantiated languagefilter plugin to use its data
			$refl = new ReflectionClass($this->_subject);
			$property = $refl->getProperty('_observers');
			$property->setAccessible(true);

			$observers = $property->getValue($this->_subject);

			$plugin = false;

			foreach ($observers as $observer)
			{
				if ($observer instanceof PlgSystemLanguageFilter)
				{
					$plugin = $observer;

					break;
				}
			}

			// If the plugin's not there, don't go forward
			if (!$plugin)
			{
				return;
			}

			// Now get the language codes from the plugin
			$refl = new ReflectionClass($plugin);
			$property = $refl->getProperty('lang_codes');
			$property->setAccessible(true);

			$languages             = $property->getValue($plugin);
			$homes                 = JLanguageMultilang::getSiteHomePages();
			$levels                = JFactory::getUser()->getAuthorisedViewLevels();
			$remove_default_prefix = $langFilterParams->get('remove_default_prefix', 0);
			$server                = JUri::getInstance()->toString(['scheme', 'host', 'port']);
			$is_home               = false;
			$router                = $this->app->getRouter('site');

			// Fetch other parameters from the filter plugin as needed
			$property = $refl->getProperty('current_lang');
			$property->setAccessible(true);
			$current_lang = $property->getValue($plugin);

			$property = $refl->getProperty('default_lang');
			$property->setAccessible(true);
			$default_lang = $property->getValue($plugin);

			// Make sure the menu helper is loaded
			JLoader::register('MenusHelper', JPATH_ADMINISTRATOR . '/components/com_menus/helpers/menus.php');

			// I hate doing this, but we're going to have to pull associations based on hardcoded routes
			switch ($active->link)
			{
				case 'index.php?option=com_ars&view=Latest&layout=latest&vgroupid=1':
					$associations = MenusHelper::getAssociations($active->id);

					break;

				case 'index.php?option=com_ars&view=Categories&layout=normal&vgroupid=1':
				case 'index.php?option=com_ars&view=Categories&layout=normal&vgroupid=5':
					// We only need to process this route if we aren't on the menu item's page; it gets handled by the filter plugin
					if (isset($menu->query) && isset($menu->query['view']) && $menu->query['view'] == 'Categories' && $this->app->input->getString('view') == $menu->query['view'])
					{
						return;
					}

					$associations = MenusHelper::getAssociations($active->id);

					break;

				default:
					// Unsupported, sorry
					return;
			}

			// Check if we are on the homepage
			$is_home = ($active->home && ($active_link == $current_link || $active_link == $current_link . 'index.php' || $active_link . '/' == $current_link));

			// For each language...
			foreach ($languages as $i => &$language)
			{
				switch (true)
				{
					// Language without frontend UI || Language without specific home menu || Language without authorized access level
					case (!array_key_exists($i, JLanguageMultilang::getSiteLangs())):
					case (!isset($homes[$i])):
					case (isset($language->access) && $language->access && !in_array($language->access, $levels)):
						unset($languages[$i]);
						break;

					// Home page
					case ($is_home):
						$language->link = JRoute::_('index.php?lang=' . $language->sef . '&Itemid=' . $homes[$i]->id);
						break;

					// Current language link
					case ($i == $current_lang):
						$language->link = JUri::getInstance()->toString(array('path', 'query'));
						break;

					// Menu items association
					// Heads up! "$item = $menu" here below is an assignment, *NOT* comparison
					case (isset($associations[$i]) && ($item = $menu->getItem($associations[$i]))):
						switch ($active->link)
						{
							case 'index.php?option=com_ars&view=Latest&layout=latest&vgroupid=1':
								$language->link = JRoute::_('index.php?Itemid=' . $item->id . '&lang=' . $language->sef);

								break;

							case 'index.php?option=com_ars&view=Categories&layout=normal&vgroupid=1':
							case 'index.php?option=com_ars&view=Categories&layout=normal&vgroupid=5':
								$language->link = JRoute::_('index.php?' . http_build_query(array_merge($router->getVars(), ['lang' => $language->sef])));

								break;
						}

						break;

					// Too bad...
					default:
						unset($languages[$i]);
				}
			}

			// If there are at least 2 of them, add the rel="alternate" links to the <head>
			if (count($languages) > 1)
			{
				// Remove the sef from the default language if "Remove URL Language Code" is on
				if (isset($languages[$default_lang]) && $remove_default_prefix)
				{
					$languages[$default_lang]->link = preg_replace(
						'|/' . $languages[$default_lang]->sef . '/|',
						'/',
						$languages[$default_lang]->link,
						1
					);
				}

				foreach ($languages as $i => &$language)
				{
					$this->app->getDocument()->addHeadLink($server . $language->link, 'alternate', 'rel', array('hreflang' => $i));
				}

				// Add x-default language tag
				if ($langFilterParams->get('xdefault', 1))
				{
					$xdefault_language = $langFilterParams->get('xdefault_language', $default_lang);
					$xdefault_language = ( $xdefault_language == 'default' ) ? $default_lang : $xdefault_language;

					if (isset($languages[$xdefault_language]))
					{
						// Use a custom tag because addHeadLink is limited to one URI per tag
						$this->app->getDocument()->addCustomTag(
							'<link href="' . $server . $languages[$xdefault_language]->link . '" rel="alternate" hreflang="x-default" />'
						);
					}
				}
			}
		}
	}

	/**
	 * After Dispatch Event. Running after components but before modules.
	 * Aim is to hide the ARS Menu item from the pathway
	 *
	 * @return   void
	 *
	 * @since   1.1.0
	 */
	private function handleLanguagePackPathways()
	{
		if (
			$this->app->input->getCmd('option') !== 'com_ars' ||
			!$this->app->isClient('site')
		) 
		{
			return;
		}

		$pathway = $this->app->getPathway()->getPathway();

		// If the top level menu item isn't the language pack component bail
		if (isset($pathway[0]->link) && strpos($pathway[0]->link, 'option=com_languagepack') === false)
		{
			return;
		}

		// Remove our bodged menu item for ARS
		unset($pathway[2]);

		$this->app->getPathway()->setPathway(array_values($pathway));
	}
}
