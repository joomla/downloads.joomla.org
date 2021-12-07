<?php
/**
 * Akeeba Engine
 * The modular PHP5 site backup engine
 *
 * @copyright Copyright (c)2010-2018 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU GPL version 3 or, at your option, any later version
 * @package   akeebaengine
 */

namespace Akeeba\Engine\Postproc\Connector\S3v4\Response;

// Protection against direct access
defined('AKEEBAENGINE') or die();

/**
 * S3 response error object
 */
class Error
{
	/**
	 * Error code
	 *
	 * @var  int
	 */
	private $code = 0;

	/**
	 * Error message
	 *
	 * @var  string
	 */
	private $message = '';

	/**
	 * URI to the resource that throws the error
	 *
	 * @var  string
	 */
	private $resource = '';

	/**
	 * Create a new error object
	 *
	 * @param   int     $code      The error code
	 * @param   string  $message   The error message
	 * @param   string  $resource  The URI to the resource throwing the error
	 *
	 * @return  Error
	 */
	function __construct($code = 0, $message = '', $resource = '')
	{
		$this->setCode($code);
		$this->setMessage($message);
		$this->setResource($resource);
	}

	/**
	 * Get the error code
	 *
	 * @return  int
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * Set the error code
	 *
	 * @param  int  $code  Set to zeroo or a negative value to clear errors
	 *
	 * @return  void
	 */
	public function setCode($code)
	{
		if ($code <= 0)
		{
			$code = 0;
			$this->setMessage('');
			$this->setResource('');
		}

		$this->code = $code;
	}

	/**
	 * Get the error message
	 *
	 * @return  string
	 */
	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * Set the error message
	 *
	 * @param  string  $message  The error message to set
	 *
	 * @return  void
	 */
	public function setMessage($message)
	{
		$this->message = $message;
	}

	/**
	 * Get the URI of the resource throwing the error
	 *
	 * @return  string
	 */
	public function getResource()
	{
		return $this->resource;
	}

	/**
	 * Set the URI of the resource throwing the error
	 *
	 * @param   string  $resource
	 *
	 * @return  void
	 */
	public function setResource($resource)
	{
		$this->resource = $resource;
	}

	/**
	 * Do we actually have an error?
	 *
	 * @return  bool
	 */
	public function isError()
	{
		return ($this->code > 0) || !empty($this->message);
	}
}
