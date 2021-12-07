<?php
/**
 * Akeeba Engine
 * The modular PHP5 site backup engine
 *
 * @copyright Copyright (c)2010-2018 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU GPL version 3 or, at your option, any later version
 * @package   akeebaengine
 */

namespace Akeeba\Engine\Postproc\Connector\S3v4\Exception;

// Protection against direct access
defined('AKEEBAENGINE') or die();

use Exception;

class CannotOpenFileForRead extends \RuntimeException
{
	public function __construct($file = "", $code = 0, Exception $previous = null)
	{
		$message = "Cannot open $file for reading";

		parent::__construct($message, $code, $previous);
	}

}
