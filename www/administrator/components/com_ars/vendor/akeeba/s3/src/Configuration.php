<?php
/**
 * Akeeba Engine
 * The modular PHP5 site backup engine
 *
 * @copyright Copyright (c)2010-2018 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU GPL version 3 or, at your option, any later version
 * @package   akeebaengine
 */

namespace Akeeba\Engine\Postproc\Connector\S3v4;

// Protection against direct access
defined('AKEEBAENGINE') or die();

/**
 * Holds the Amazon S3 confiugration credentials
 */
class Configuration
{
	/**
	 * Access Key
	 *
	 * @var  string
	 */
	protected $access = '';

	/**
	 * Secret Key
	 *
	 * @var  string
	 */
	protected $secret = '';

	/**
	 * Signature calculation method ('v2' or 'v4')
	 *
	 * @var  string
	 */
	protected $signatureMethod = 'v2';

	/**
	 * AWS region, used for v4 signatures
	 *
	 * @var  string
	 */
	protected $region = 'us-east-1';

	/**
	 * Should I use SSL (HTTPS) to communicate to Amazon S3?
	 *
	 * @var  bool
	 */
	protected $useSSL = true;

	/**
	 * Should I use legacy, path-style access to the bucket? When it's turned off (default) we use virtual hosting style
	 * paths which are RECOMMENDED BY AMAZON per http://docs.aws.amazon.com/AmazonS3/latest/API/APIRest.html
	 *
	 * @var  bool
	 */
	protected $useLegacyPathStyle = false;

	/**
	 * Amazon S3 endpoint. You can use a custom endpoint with v2 signatures to access third party services which offer
	 * S3 compatibility, e.g. OwnCloud, Google Storage etc.
	 *
	 * @var  string
	 */
	protected $endpoint = 's3.amazonaws.com';

	/**
	 * Public constructor
	 *
	 * @param   string  $access            Amazon S3 Access Key
	 * @param   string  $secret            Amazon S3 Secret Key
	 * @param   string  $singatureMethod   Signature method (v2 or v4)
	 * @param   string  $region            Region, only required for v4 signatures
	 */
	function __construct($access, $secret, $singatureMethod = 'v2', $region = '')
	{
		$this->setAccess($access);
		$this->setSecret($secret);
		$this->setSignatureMethod($singatureMethod);
		$this->setRegion($region);
	}

	/**
	 * Get the Amazon access key
	 *
	 * @return  string
	 */
	public function getAccess()
	{
		return $this->access;
	}

	/**
	 * Set the Amazon access key
	 *
	 * @param   string  $access  The access key to set
	 *
	 * @throws  Exception\InvalidAccessKey
	 */
	public function setAccess($access)
	{
		if (empty($access))
		{
			throw new Exception\InvalidAccessKey;
		}

		$this->access = $access;
	}

	/**
	 * Get the Amazon secret key
	 *
	 * @return string
	 */
	public function getSecret()
	{
		return $this->secret;
	}

	/**
	 * Set the Amazon secret key
	 *
	 * @param   string  $secret  The secret key to set
	 *
	 * @throws  Exception\InvalidSecretKey
	 */
	public function setSecret($secret)
	{
		if (empty($secret))
		{
			throw new Exception\InvalidSecretKey;
		}

		$this->secret = $secret;
	}

	/**
	 * Get the signature method to use
	 *
	 * @return  string
	 */
	public function getSignatureMethod()
	{
		return $this->signatureMethod;
	}

	/**
	 * Set the signature method to use
	 *
	 * @param   string  $signatureMethod  One of v2 or v4
	 *
	 * @throws  Exception\InvalidSignatureMethod
	 */
	public function setSignatureMethod($signatureMethod)
	{
		$signatureMethod = strtolower($signatureMethod);
		$signatureMethod = trim($signatureMethod);

		if (!in_array($signatureMethod, array('v2', 'v4')))
		{
			throw new Exception\InvalidSignatureMethod;
		}

		$this->signatureMethod = $signatureMethod;
	}

	/**
	 * Get the Amazon S3 region
	 *
	 * @return  string
	 */
	public function getRegion()
	{
		return $this->region;
	}

	/**
	 * Set the Amazon S3 region
	 *
	 * @param   string  $region
	 */
	public function setRegion($region)
	{
		if (empty($region) && ($this->signatureMethod == 'v4'))
		{
			throw new Exception\InvalidRegion;
		}

		$this->region = $region;
	}

	/**
	 * Is the connection to be made over HTTPS?
	 *
	 * @return  boolean
	 */
	public function isSSL()
	{
		return $this->useSSL;
	}

	/**
	 * Set the connection SSL preference
	 *
	 * @param  boolean  $useSSL  True to use HTTPS
	 */
	public function setSSL($useSSL)
	{
		$this->useSSL = $useSSL ? true : false;
	}

	/**
	 * Get the Amazon S3 endpoint
	 *
	 * @return  string
	 */
	public function getEndpoint()
	{
		return $this->endpoint;
	}

	/**
	 * Set the Amazon S3 endpoint. Do NOT use a protocol
	 *
	 * @param   string  $endpoint  Custom endpoint, e.g. 's3.example.com' or 'www.example.com/s3api'
	 */
	public function setEndpoint($endpoint)
	{
		if (stristr($endpoint, '://'))
		{
			throw new Exception\InvalidEndpoint;
		}

		$this->endpoint = $endpoint;
	}

	/**
	 * Should I use legacy, path-style access to the bucket?
	 *
	 * @return  boolean
	 */
	public function getUseLegacyPathStyle()
	{
		return $this->useLegacyPathStyle;
	}

	/**
	 * Set the flag for using legacy, path-style access to the bucket
	 *
	 * @param  boolean  $useLegacyPathStyle
	 */
	public function setUseLegacyPathStyle($useLegacyPathStyle)
	{
		$this->useLegacyPathStyle = $useLegacyPathStyle;
	}
}
