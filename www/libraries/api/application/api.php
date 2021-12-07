<?php
/**
 * Joomla! Downloads API Application
 *
 * @copyright  Copyright (C) 2016 Open Source Matters, Inc. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

use Joomla\Application\Web\WebClient;
use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Date\Date;
use Joomla\CMS\Factory;
use Joomla\CMS\Input\Input;
use Joomla\CMS\Language\Language;
use Joomla\CMS\Language\LanguageHelper;
use Joomla\CMS\Uri\Uri;
use Joomla\Registry\Registry;

/**
 * Joomla! API Application class
 *
 * @since  1.0
 */
final class JApplicationApi extends CMSApplication
{
	/**
	 * The client identifier.
	 *
	 * @var    integer
	 * @since  1.0
	 */
	protected $clientId = 3;

	/**
	 * The controller returned from the router
	 *
	 * @var    JController
	 * @since  1.0
	 */
	protected $controller;

	/**
	 * Response MIME type.
	 *
	 * @var    string
	 * @since  1.0
	 */
	public $mimeType = 'application/json';

	/**
	 * The name of the application.
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $name = 'api';

	/**
	 * The response data
	 *
	 * @var    array
	 * @since  1.0
	 */
	protected $responseData = [];

	/**
	 * Class constructor.
	 *
	 * @param   Input      $input   An optional argument to provide dependency injection for the application's
	 *                              input object.  If the argument is a Input object that object will become
	 *                              the application's input object, otherwise a default input object is created.
	 * @param   Registry   $config  An optional argument to provide dependency injection for the application's
	 *                              config object.  If the argument is a Registry object that object will become
	 *                              the application's config object, otherwise a default config object is created.
	 * @param   WebClient  $client  An optional argument to provide dependency injection for the application's
	 *                              client object.  If the argument is a JApplicationWebClient object that object will become
	 *                              the application's client object, otherwise a default client object is created.
	 *
	 * @since   1.0
	 */
	public function __construct(Input $input = null, Registry $config = null, WebClient $client = null)
	{
		// Execute the parent constructor
		parent::__construct($input, $config, $client);

		// Set the root in the URI based on the application name
		Uri::root(null, str_ireplace('/' . $this->getName(), '', Uri::base(true)));

		// Create the application router
		$this->router = new ApiRouter($this, $this->input);
		$this->router->setControllerPrefix('ApiController');

		// Now parse the Open API file for all the routes
		$this->initialiseRoutes();

		// Force the format to JSON, mainly affects JDocument uses
		$this->input->set('format', 'json');
	}

	/**
	 * Parses the Open API file (using the v2 format) for all the routes
	 *
	 * In the future here we should do basic validation of the parameters!
	 *
	 * @since 1.0
	 */
	protected function initialiseRoutes()
	{
		$swaggerFile = __DIR__ . '/open_api.json';

		if (!file_exists($swaggerFile))
		{
			throw new \RuntimeException('Open API Routing file could not be found', 500);
		}

		// Now get the user management routes (these are from the generated swagger json file
		$swaggerJson = json_decode(file_get_contents($swaggerFile), true);

		if (!$swaggerJson)
		{
			throw new \RuntimeException('Invalid JSON in Open API File', 500);
		}

		foreach ($swaggerJson['paths'] as $url => $operations)
		{
			foreach ($operations as $httpMethod => $operation)
			{
				$this->router->addMap($url, ucfirst($operation['operationId']));
			}
		}
	}

	/**
	 * Dispatch the application
	 *
	 * @param   string  $component  The component which is being rendered.
	 *
	 * @return  void
	 *
	 * @since   3.2
	 */
	public function dispatch($component = null)
	{
		// Get the component if not set.
		if (!$component)
		{
			$component = $this->input->getCmd('option', null);
		}

		// Load the document to the API
		$this->loadDocument();

		// Register the document object with Factory
		Factory::$document = $this->getDocument();

		// Define component paths for application compatibility.
		if (!defined('JPATH_COMPONENT'))
		{
			define('JPATH_COMPONENT', JPATH_SITE . '/components/' . $component);
		}

		if (!defined('JPATH_COMPONENT_SITE'))
		{
			define('JPATH_COMPONENT_SITE', JPATH_SITE . '/components/' . $component);
		}

		if (!defined('JPATH_COMPONENT_ADMINISTRATOR'))
		{
			define('JPATH_COMPONENT_ADMINISTRATOR', JPATH_ADMINISTRATOR . '/components/' . $component);
		}

		// Load the component's language files.
		$this->getLanguage()->load($component, JPATH_SITE, null, false, true) || $this->getLanguage()->load($component, JPATH_COMPONENT, null, false, true);

		$this->controller->execute();
	}

	/**
	 * Method to run the Web application routines.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	protected function doExecute()
	{
		// Initialise the application
		$this->initialiseApp();

		// Mark afterInitialise in the profiler.
		JDEBUG ? $this->profiler->mark('afterInitialise') : null;

		// Route the application
		$this->route();

		// Mark afterRoute in the profiler.
		JDEBUG ? $this->profiler->mark('afterRoute') : null;

		// Dispatch the application
		$this->dispatch();

		// Mark afterDispatch in the profiler.
		JDEBUG ? $this->profiler->mark('afterDispatch') : null;
	}

	/**
	 * Gets the client id of the current running application.
	 *
	 * @return  integer
	 *
	 * @since   1.0
	 */
	public function getClientId()
	{
		return $this->clientId;
	}

	/**
	 * Return a reference to the JMenu object.
	 *
	 * Note: The API application defaults to using a JMenuSite object for extension compatibility
	 *
	 * @param   string  $name     The name of the application/client.
	 * @param   array   $options  An optional associative array of configuration settings.
	 *
	 * @return  JMenu
	 *
	 * @since   1.0
	 */
	public function getMenu($name = 'site', $options = array())
	{
		// Inject an application object into the JMenu tree if one isn't already specified
		if (!isset($options['app']))
		{
			$options['app'] = static::getInstance($name);
		}

		return parent::getMenu($name, $options);
	}

	/**
	 * Gets the name of the current running application.
	 *
	 * @return  string
	 *
	 * @since   1.0
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the application parameters
	 *
	 * @param   string  $option  The component option
	 *
	 * @return  Registry
	 *
	 * @since   1.0
	 */
	public function getParams($option = null)
	{
		static $params = array();

		$hash = '__default';

		if (!empty($option))
		{
			$hash = $option;
		}

		if (!isset($params[$hash]))
		{
			// Get component parameters
			if (!$option)
			{
				$option = $this->input->getCmd('option', null);
			}

			// Get new instance of component global parameters
			$params[$hash] = clone ComponentHelper::getParams($option);

			// Get menu parameters
			$menus = $this->getMenu();
			$menu  = $menus->getActive();

			// Get language
			$lang_code = $this->getLanguage()->getTag();
			$languages = LanguageHelper::getLanguages('lang_code');

			$title = $this->get('sitename');

			if (isset($languages[$lang_code]) && $languages[$lang_code]->metadesc)
			{
				$description = $languages[$lang_code]->metadesc;
			}
			else
			{
				$description = $this->get('MetaDesc');
			}

			$rights = $this->get('MetaRights');
			$robots = $this->get('robots');

			// Retrieve com_menu global settings
			$temp = clone ComponentHelper::getParams('com_menus');

			// Lets cascade the parameters if we have menu item parameters
			if (is_object($menu))
			{
				// Get show_page_heading from com_menu global settings
				$params[$hash]->def('show_page_heading', $temp->get('show_page_heading'));

				$temp = new Registry;
				$temp->loadString($menu->params);
				$params[$hash]->merge($temp);
				$title = $menu->title;
			}
			else
			{
				// Merge com_menu global settings
				$params[$hash]->merge($temp);

				// If supplied, use page title
				$title = $temp->get('page_title', $title);
			}

			$params[$hash]->def('page_title', $title);
			$params[$hash]->def('page_description', $description);
			$params[$hash]->def('page_rights', $rights);
			$params[$hash]->def('robots', $robots);
		}

		return $params[$hash];
	}

	/**
	 * Return a reference to the JPathway object.
	 *
	 * Note: The API application defaults to using a JPathwaySite object for extension compatibility
	 *
	 * @param   string  $name     The name of the application.
	 * @param   array   $options  An optional associative array of configuration settings.
	 *
	 * @return  JPathway
	 *
	 * @since   1.0
	 */
	public function getPathway($name = 'site', $options = array())
	{
		return parent::getPathway($name, $options);
	}

	/**
	 * Return a reference to the JRouter object.
	 *
	 * Note: The API application defaults to using a JRouterSite object for extension compatibility
	 *
	 * @param   string  $name     The name of the application.
	 * @param   array   $options  An optional associative array of configuration settings.
	 *
	 * @return  JRouter
	 *
	 * @since   1.0
	 */
	public static function getRouter($name = 'site', array $options = array())
	{
		$options['mode'] = Factory::getConfig()->get('sef');

		return parent::getRouter($name, $options);
	}

	/**
	 * Gets the name of the current template.
	 *
	 * @param   boolean  $params  True to return the template parameters
	 *
	 * @return  string
	 *
	 * @since   1.0
	 */
	public function getTemplate($params = false)
	{
		// The API application should not need to use a template
		return 'system';
	}

	/**
	 * Initialise the application.
	 *
	 * @param   array  $options  An optional associative array of configuration settings.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	protected function initialiseApp($options = array())
	{
		// Build our language object
		$lang = Language::getInstance($this->get('language'), $this->get('debug_lang'));

		// Load the frontend's language strings (not loaded here since Language uses JPATH_BASE as the default parameter)
		$lang->load('joomla', JPATH_SITE, null, false, true);

		// Load the language to the API
		$this->loadLanguage($lang);

		// Register the language object with Factory
		Factory::$language = $this->getLanguage();

		/*
		 * Try the lib_joomla file in the current language (without allowing the loading of the file in the default language)
		 * Fallback to the default language if necessary
		 */
		$this->getLanguage()->load('lib_joomla', JPATH_SITE, null, false, true)
			|| $this->getLanguage()->load('lib_joomla', JPATH_ADMINISTRATOR, null, false, true);
	}

	/**
	 * Rendering is the process of pushing the document buffers into the template
	 * placeholders, retrieving data from the document and pushing it into
	 * the application response buffer.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	protected function render()
	{
		// The JsonDocument forces cache to be disabled, let's respect our decisions in the application instead
		$preferredCache = $this->allowCache();

		// Render the document.
		$this->responseData = $this->document->render($this->allowCache());

		// Restore the cache decision
		$this->allowCache($preferredCache);

		// Mark afterRender in the profiler.
		JDEBUG ? $this->profiler->mark('afterRender') : null;
	}

	/**
	 * Method to send the application response to the client.  All headers will be sent prior to the main application output data.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	protected function respond()
	{
		// Send the content-type header.
		$this->setHeader('Content-Type', $this->mimeType . '; charset=' . $this->charSet);

		// If the response is set to uncachable, we need to set some appropriate headers so browsers don't cache the response.
		if (!$this->response->cachable)
		{
			// Expires in the past.
			$this->setHeader('Expires', 'Wed, 17 Aug 2005 00:00:00 GMT', true);

			// Always modified.
			$this->setHeader('Last-Modified', gmdate('D, d M Y H:i:s') . ' GMT', true);
			$this->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0', false);

			// HTTP 1.0
			$this->setHeader('Pragma', 'no-cache');
		}
		else
		{
			// Expires.
			$this->setHeader('Expires', gmdate('D, d M Y H:i:s', time() + 900) . ' GMT');

			// Last modified.
			if ($this->modifiedDate instanceof Date)
			{
				$this->setHeader('Last-Modified', $this->modifiedDate->format('D, d M Y H:i:s'));
			}
		}

		$this->sendHeaders();

		// Attach the profiler's data if debugging
		if (JDEBUG)
		{
			$this->profiler->mark('onBeforeSendResponse');
			$this->responseData['profile'] = $this->profiler->getMarks();
		}

		echo json_encode($this->responseData);
	}

	/**
	 * Route the application.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	protected function route()
	{
		try
		{
			$this->controller = $this->router->getController($this->get('uri.route'));
		}
		catch (InvalidArgumentException $e)
		{
			throw new RuntimeException(
				sprintf('No endpoint found for URI `%s`', $this->get('uri.route')),
				404,
				$e
			);
		}
	}

	/**
	 * Overrides the default template that would be used
	 *
	 * @param   string  $template     The template name
	 * @param   mixed   $styleParams  The template style parameters
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function setTemplate($template, $styleParams = null)
	{
		// Leave this here for extension compatibility only
	}
}
