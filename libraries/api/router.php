<?php
/**
 * Joomla! API Application
 *
 * @copyright  Copyright (C) 2016 Michael Babker. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

/**
 * Basic Web application router class for the Joomla! API application.
 *
 * @since  1.0
 */
class ApiRouter extends JApplicationWebRouterBase
{
	/**
	 * Add a route map to the router.  If the pattern already exists it will be overwritten.
	 *
	 * @param   string  $pattern     The route pattern to use for matching.
	 * @param   string  $controller  The controller name to map to the given pattern.
	 *
	 * @return  JApplicationWebRouter  This object for method chaining.
	 *
	 * @since   1.0
	 * @note    This method is extended to support OpenAPI path variable naming in the format of {foo}
	 */
	public function addMap($pattern, $controller)
	{
		// Sanitize and explode the pattern.
		$pattern = explode('/', trim(parse_url((string) $pattern, PHP_URL_PATH), ' /'));

		// Prepare the route variables
		$vars = array();

		// Initialize regular expression
		$regex = array();

		// Loop on each segment
		foreach ($pattern as $segment)
		{
			// Match a splat with no variable.
			if ($segment == '*')
			{
				$regex[] = '.*';
			}
			// Match a splat and capture the data to a named variable.
			elseif ($segment[0] == '*')
			{
				$vars[] = substr($segment, 1);
				$regex[] = '(.*)';
			}
			// Match an escaped splat segment.
			elseif ($segment[0] == '\\' && $segment[1] == '*')
			{
				$regex[] = '\*' . preg_quote(substr($segment, 2));
			}
			// Match an unnamed variable without capture.
			elseif ($segment == ':')
			{
				$regex[] = '[^/]*';
			}
			// Match a named variable and capture the data.
			elseif ($segment[0] == ':')
			{
				$vars[] = substr($segment, 1);
				$regex[] = '([^/]*)';
			}
			// Match a named variable in OpenAPI spec
			elseif ($segment[0] == '{')
			{
				$vars[] = substr($segment, 1, -1);
				$regex[] = '([^/]*)';
			}
			// Match a segment with an escaped variable character prefix.
			elseif ($segment[0] == '\\' && $segment[1] == ':')
			{
				$regex[] = preg_quote(substr($segment, 1));
			}
			// Match the standard segment.
			else
			{
				$regex[] = preg_quote($segment);
			}
		}

		$this->maps[] = array(
			'regex' => chr(1) . '^' . implode('/', $regex) . '$' . chr(1),
			'vars' => $vars,
			'controller' => (string) $controller,
		);

		return $this;
	}

	/**
	 * Find the appropriate controller based on a given route.
	 *
	 * @param   string  $route  The route string for which to find and execute a controller.
	 *
	 * @return  JController
	 *
	 * @since   1.0
	 */
	public function getController($route)
	{
		return $this->fetchController($this->parseRoute($route));
	}
}
