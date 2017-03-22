<?php
/**
 * Joomla! API Application
 *
 * @copyright  Copyright (C) 2016 Michael Babker. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

/**
 * Class to handle application errors
 *
 * @since  1.0
 */
class ApiError
{
	/**
	 * Error handler for legacy JError based errors
	 *
	 * @param   JException  &$error  The error object
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public static function handleLegacyError(JException &$error)
	{
		switch ($error->get('level'))
		{
			case E_NOTICE:
			case E_WARNING:
				$type = E_NOTICE ? 'info' : 'warning';
				JFactory::getApplication()->enqueueMessage($error->getMessage(), $type);

				break;

			case E_ERROR:
				static::handleUncaughtThrowable($error);

				break;
		}
	}

	/**
	 * Error handler for uncaught Throwable objects
	 *
	 * @param   Throwable|Exception  $throwable  The Exception (PHP 5) or Throwable (PHP 7) object
	 *
	 * @return  void
	 *
	 * @since   1.0
	 * @throws  InvalidArgumentException
	 */
	public static function handleUncaughtThrowable($throwable)
	{
		// If this isn't a Throwable then bail out
		if (!($throwable instanceof Throwable) && !($throwable instanceof Exception))
		{
			throw new InvalidArgumentException(
				sprintf('The error handler requires a Exception or Throwable object, a "%s" object was given instead.', get_class($throwable))
			);
		}

		$app = JFactory::getApplication();

		// Set the status header
		$status = $throwable->getCode();

		if ($status < 400 || $status > 599)
		{
			$status = 500;
		}

		$app->setHeader('status',  $status);

		// Send the content-type header.
		$app->setHeader('Content-Type', $app->mimeType . '; charset=' . $app->charSet);

		// Expires in the past.
		$app->setHeader('Expires', 'Wed, 17 Aug 2005 00:00:00 GMT', true);

		// Always modified.
		$app->setHeader('Last-Modified', gmdate('D, d M Y H:i:s') . ' GMT', true);
		$app->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0', false);

		// HTTP 1.0
		$app->setHeader('Pragma', 'no-cache');

		$app->sendHeaders();

		echo json_encode(
			['error' => ['code' => $throwable->getCode(), 'message' => $throwable->getMessage()]]
		);

		$app->close();
	}
}
