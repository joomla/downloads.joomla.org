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

use Akeeba\Engine\Postproc\Connector\S3v4\Response\Error;

// Protection against direct access
defined('AKEEBAENGINE') or die();


class Request
{
	/**
	 * The HTTP verb to use
	 *
	 * @var  string
	 */
	private $verb = 'GET';

	/**
	 * The bucket we are using
	 *
	 * @var  string
	 */
	private $bucket = '';

	/**
	 * The object URI, relative to the bucket's root
	 *
	 * @var  string
	 */
	private $uri = '';

	/**
	 * The remote resource we are querying
	 *
	 * @var  string
	 */
	private $resource = '';

	/**
	 * Query string parameters
	 *
	 * @var  array
	 */
	private $parameters = array();

	/**
	 * Amazon-specific headers to pass to the request
	 *
	 * @var  array
	 */
	private $amzHeaders = array();

	/**
	 * Regular HTTP headers to send in the request
	 *
	 * @var  array
	 */
	private $headers = array(
		'Host' => '',
		'Date' => '',
		'Content-MD5' => '',
		'Content-Type' => ''
	);

	/**
	 * Input data for the request
	 *
	 * @var  Input
	 */
	private $input = null;

	/**
	 * The file resource we are writing data to
	 *
	 * @var  bool|resource
	 */
	private $fp = false;

	/**
	 * The Amazon S3 configuration object
	 *
	 * @var Configuration
	 */
	private $configuration = null;

	/**
	 * The response object
	 *
	 * @var  Response
	 */
	private $response = null;

	/**
	 * The location of the CA certificate cache. It can be a file or a directory. If it's not specified, the location
	 * set in AKEEBA_CACERT_PEM will be used
	 *
	 * @var  string|null
	 */
	private $caCertLocation = null;

	/**
	 * Constructor
	 *
	 * @param   string         $verb           HTTP verb, e.g. 'POST'
	 * @param   string         $bucket         Bucket name, e.g. 'example-bucket'
	 * @param   string         $uri            Object URI
	 * @param   Configuration  $configuration  The Amazon S3 configuration object to use
	 *
	 * @return  Request
	 */
	function __construct($verb, $bucket = '', $uri = '', Configuration $configuration)
	{
		$this->verb          = $verb;
		$this->bucket        = $bucket;
		$this->uri           = '/';
		$this->configuration = $configuration;

		if (!empty($uri))
		{
			$this->uri = '/' . str_replace('%2F', '/', rawurlencode($uri));
		}

		$defaultHost = $configuration->getEndpoint();

		$this->headers['Host'] = $this->getHostName($configuration, $this->bucket);
		$this->resource        = $this->uri;

		if ($this->bucket !== '')
		{
			$this->resource = '/' . $this->bucket . $this->uri;

			if ($this->headers['Host'] != $this->bucket . '.' . $defaultHost)
			{
				$this->uri = $this->resource;
			}
		}

		$this->headers['Date'] = gmdate('D, d M Y H:i:s T');

		$this->response = new Response();
	}

	/**
	 * Get the input object
	 *
	 * @return  Input
	 */
	public function getInput()
	{
		return $this->input;
	}

	/**
	 * Set the input object
	 *
	 * @param   Input  $input
	 *
	 * @return  void
	 */
	public function setInput(Input $input)
	{
		$this->input = $input;
	}

	/**
	 * Set a request parameter
	 *
	 * @param   string  $key    The parameter name
	 * @param   string  $value  The parameter value
	 *
	 * @return  void
	 */
	public function setParameter($key, $value)
	{
		$this->parameters[$key] = $value;
	}

	/**
	 * Set a request header
	 *
	 * @param   string  $key    The header name
	 * @param   string  $value  The header value
	 *
	 * @return  void
	 */
	public function setHeader($key, $value)
	{
		$this->headers[$key] = $value;
	}

	/**
	 * Set an x-amz-meta-* header
	 *
	 * @param   string  $key    The header name
	 * @param   string  $value  The header value
	 *
	 * @return  void
	 */
	public function setAmzHeader($key, $value)
	{
		$this->amzHeaders[$key] = $value;
	}

	/**
	 * Get the HTTP verb of this request
	 *
	 * @return  string
	 */
	public function getVerb()
	{
		return $this->verb;
	}

	/**
	 * Get the S3 bucket's name
	 *
	 * @return  string
	 */
	public function getBucket()
	{
		return $this->bucket;
	}

	/**
	 * Get the absolute URI of the resource we're accessing
	 *
	 * @return  string
	 */
	public function getResource()
	{
		return $this->resource;
	}

	/**
	 * Get the parameters array
	 *
	 * @return  array
	 */
	public function getParameters()
	{
		return $this->parameters;
	}

	/**
	 * Get the Amazon headers array
	 *
	 * @return  array
	 */
	public function getAmzHeaders()
	{
		return $this->amzHeaders;
	}

	/**
	 * Get the other headers array
	 *
	 * @return  array
	 */
	public function getHeaders()
	{
		return $this->headers;
	}

	/**
	 * Get a reference to the Amazon configuration object
	 *
	 * @return  Configuration
	 */
	public function getConfiguration()
	{
		return $this->configuration;
	}

	/**
	 * Get the file pointer resource (for PUT and POST requests)
	 *
	 * @return  bool|resource
	 */
	public function &getFp()
	{
		return $this->fp;
	}

	/**
	 * Set the data resource as a file pointer
	 *
	 * @param   resource  $fp
	 */
	public function setFp($fp)
	{
		$this->fp = $fp;
	}

	/**
	 * Get the certificate authority location
	 *
	 * @return  string
	 */
	public function getCaCertLocation()
	{
		if (!empty($this->caCertLocation))
		{
			return $this->caCertLocation;
		}

		if (defined('AKEEBA_CACERT_PEM'))
		{
			return AKEEBA_CACERT_PEM;
		}

		return null;
	}

	/**
	 * @param null|string $caCertLocation
	 */
	public function setCaCertLocation($caCertLocation)
	{
		if (empty($caCertLocation))
		{
			$caCertLocation = null;
		}

		if (!is_null($caCertLocation) && !is_file($caCertLocation) && !is_dir($caCertLocation))
		{
			$caCertLocation = null;
		}

		$this->caCertLocation = $caCertLocation;
	}

	/**
	 * Get a pre-signed URL for the request. Typically used to pre-sign GET requests to objects, i.e. give shareable
	 * pre-authorized URLs for downloading files from S3.
	 *
	 * @param   integer  $lifetime    Lifetime in seconds
	 * @param   boolean  $https       Use HTTPS ($hostBucket should be false for SSL verification)?
	 *
	 * @return  string  The presigned URL
	 */
	public function getAuthenticatedURL($lifetime = null, $https = false)
	{
		$this->processParametersIntoResource();
		$signer = Signature::getSignatureObject($this, $this->configuration->getSignatureMethod());

		return $signer->getAuthenticatedURL($lifetime, $https);
	}

	/**
	 * Get the S3 response
	 *
	 * @return  Response
	 */
	public function getResponse()
	{
		$this->processParametersIntoResource();

		$schema = 'http://';

		if ($this->configuration->isSSL())
		{
			$schema = 'https://';
		}

		// Very special case. IF the URI ends in /?location AND the region is us-east-1 (Host is
		// s3-external-1.amazonaws.com) THEN the host MUST become s3.amazonaws.com for the request to work. This is case
		// of us not knowing the region of the bucket, therefore having to use a special endpoint which lets us query
		// the region of the bucket without knowing its region. See
		// http://stackoverflow.com/questions/27091816/retrieve-buckets-objects-without-knowing-buckets-region-with-aws-s3-rest-api
		if ((substr($this->uri, - 10) == '/?location') && ($this->headers['Host'] == 's3-external-1.amazonaws.com'))
		{
			$this->headers['Host'] = 's3.amazonaws.com';
		}

		$url = $schema . $this->headers['Host'] . $this->uri;

		// Basic setup
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_USERAGENT, 'AkeebaBackupProfessional/S3PostProcessor');

		if ($this->configuration->isSSL())
		{
			// Set the CA certificate cache location
			$caCert = $this->getCaCertLocation();

			if (!empty($caCert))
			{
				if (is_dir($caCert))
				{
					@curl_setopt($curl, CURLOPT_CAPATH, $caCert);
				}
				else
				{
					@curl_setopt($curl, CURLOPT_CAINFO, $caCert);
				}
			}

			// Verify the host name in the certificate and the certificate itself. However, if your bucket contains dots
			// we have to turn off host verification. Sorry, that's a limitation of Amazon S3. Since they recommend
			// always using virtual hosting style hostnames while their SSL certificate is set up to only allow
			// subdomains (bucket names) without dots the direct implication is that if you want to use SSL you MUST NOT
			// use dots in your bucket name. Of course this contradicts another part of their documentation which
			// suggests using bucket names with dots (same as your domain name) but YOU CAN'T MAKE SENSE OF THEIR BLOODY
			// DOCS, CAN YOU? For what is worth their own SDK uses path-style access which they tell everyone else to
			// not use.
			//
			// TL;DR: Amazon is a bunch of jerks.
			$isAmazonS3 = (substr($this->headers['Host'], -14) == '.amazonaws.com') ||
				substr($this->headers['Host'], -16) == 'amazonaws.com.cn';
			$tooManyDots = substr_count($this->headers['Host'], '.') > 3;

			$verifyHost = ($isAmazonS3 && $tooManyDots) ? 0 : 2;

			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, $verifyHost);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
		}

		curl_setopt($curl, CURLOPT_URL, $url);

		$signer = Signature::getSignatureObject($this, $this->configuration->getSignatureMethod());
		$signer->preProcessHeaders($this->headers, $this->amzHeaders);

		// Headers
		$headers = array();

		foreach ($this->amzHeaders as $header => $value)
		{
			if (strlen($value) > 0)
			{
				$headers[] = $header . ': ' . $value;
			}
		}

		foreach ($this->headers as $header => $value)
		{
			if (strlen($value) > 0)
			{
				$headers[] = $header . ': ' . $value;
			}
		}

		$headers[] = 'Authorization: ' . $signer->getAuthorizationHeader();

		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, false);
		curl_setopt($curl, CURLOPT_WRITEFUNCTION, array($this, '__responseWriteCallback'));
		curl_setopt($curl, CURLOPT_HEADERFUNCTION, array($this, '__responseHeaderCallback'));
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

		// Request types
		switch ($this->verb)
		{
			case 'GET':
				break;

			case 'PUT':
			case 'POST':
				if (!is_object($this->input) || !($this->input instanceof Input))
				{
					$this->input = new Input();
				}

				$size = $this->input->getSize();
				$type = $this->input->getInputType();

				if ($type == Input::INPUT_DATA)
				{
					curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $this->verb);

					$data = $this->input->getDataReference();

					if (strlen($data))
					{
						curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
					}

					if ($size > 0)
					{
						curl_setopt($curl, CURLOPT_BUFFERSIZE, $size);
					}
				}
				else
				{
					curl_setopt($curl, CURLOPT_PUT, true);
					curl_setopt($curl, CURLOPT_INFILE, $this->input->getFp());

					if ($size > 0)
					{
						curl_setopt($curl, CURLOPT_INFILESIZE, $size);
					}
				}


				break;

			case 'HEAD':
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'HEAD');
				curl_setopt($curl, CURLOPT_NOBODY, true);
				break;

			case 'DELETE':
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
				break;

			default:
				break;
		}

		// Execute, grab errors
		$this->response->resetBody();

		if (curl_exec($curl))
		{
			$this->response->code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		}
		else
		{
			$this->response->error = new Error(
				curl_errno($curl),
				curl_error($curl),
				$this->resource
			);
		}

		@curl_close($curl);

		// Set the body data
		$this->response->finaliseBody();

		// Clean up file resources
		if (!is_null($this->fp) && is_resource($this->fp))
		{
			fclose($this->fp);
		}

		return $this->response;
	}


	/**
	 * cURL write callback
	 *
	 * @param   resource   &$curl  cURL resource
	 * @param   string     &$data  Data
	 *
	 * @return  int  Length in bytes
	 */
	protected function  __responseWriteCallback(&$curl, &$data)
	{
		if (in_array($this->response->code, array(200, 206)) && !is_null($this->fp) && is_resource($this->fp))
		{
			return fwrite($this->fp, $data);
		}

		$this->response->addToBody($data);

		return strlen($data);
	}

	/**
	 * cURL header callback
	 *
	 * @param   resource  &$curl  cURL resource
	 * @param   string    &$data  Data
	 *
	 * @return  int  Length in bytes
	 */
	protected function  __responseHeaderCallback(&$curl, &$data)
	{
		if (($strlen = strlen($data)) <= 2)
		{
			return $strlen;
		}

		if (substr($data, 0, 4) == 'HTTP')
		{
			$this->response->code = (int)substr($data, 9, 3);

			return $strlen;
		}

		list($header, $value) = explode(': ', trim($data), 2);

		switch ($header)
		{
			case 'Last-Modified':
				$this->response->setHeader('time', strtotime($value));
				break;

			case 'Content-Length':
				$this->response->setHeader('size', (int)$value);
				break;

			case 'Content-Type':
				$this->response->setHeader('type', $value);
				break;

			case 'ETag':
				$this->response->setHeader('hash', $value{0} == '"' ? substr($value, 1, -1) : $value);
				break;

			default:
				if (preg_match('/^x-amz-meta-.*$/', $header))
				{
					$this->setHeader($header, is_numeric($value) ? (int)$value : $value);
				}
				break;
		}

		return $strlen;
	}

	/**
	 * Processes $this->parameters as a query string into $this->resource
	 *
	 * @return  void
	 */
	private function processParametersIntoResource()
	{
		if (count($this->parameters))
		{
			$query = substr($this->uri, -1) !== '?' ? '?' : '&';

			ksort($this->parameters);

			foreach ($this->parameters as $var => $value)
			{
				if ($value == null || $value == '')
				{
					$query .= $var . '&';
				}
				else
				{
					// Parameters must be URL-encoded
					$query .= $var . '=' . rawurlencode($value) . '&';
				}
			}

			$query = substr($query, 0, -1);
			$this->uri .= $query;

			if (array_key_exists('acl', $this->parameters) ||
				array_key_exists('location', $this->parameters) ||
				array_key_exists('torrent', $this->parameters) ||
				array_key_exists('logging', $this->parameters) ||
				array_key_exists('uploads', $this->parameters) ||
				array_key_exists('uploadId', $this->parameters) ||
				array_key_exists('partNumber', $this->parameters)
			)
			{
				$this->resource .= $query;
			}
		}
	}

	/**
	 * Get the region-specific hostname for an operation given a configuration and a bucket name. This ensures we can
	 * always use an HTTPS connection, even with buckets containing dots in their names, without SSL certificate host
	 * name validation issues.
	 *
	 * Please note that this requires the pathStyle flag to be set in Configuration because Amazon RECOMMENDS using the
	 * virtual-hosted style request where applicable. See http://docs.aws.amazon.com/AmazonS3/latest/API/APIRest.html
	 * Quoting this documentation:
	 * "Although the path-style is still supported for legacy applications, we recommend using the virtual-hosted style
	 * where applicable."
	 *
	 * @param   Configuration  $configuration
	 * @param   string         $bucket
	 *
	 * @return  string
	 */
	private function getHostName(Configuration $configuration, $bucket)
	{
		//
		// http://docs.aws.amazon.com/general/latest/gr/rande.html#s3_region
		$endpoint = $configuration->getEndpoint();
		$hostname = $bucket . '.' . $endpoint;

		/**
		 * If there is no bucket we use the default endpoint, whatever it is. For Amazon S3 this format is only used
		 * when we are making account-level, cross-region requests, e.g. list all buckets. For S3-compatible APIs it
		 * depends on the API, but generally it's just for listing available buckets.
		 */
		if (empty($bucket))
		{
			return $endpoint;
		}

		/**
		 * If a custom endpoint has been specified we have to use the v2 signature API and its old-style hostnames, i.e.
		 * "virtual hosting". For example with an endpoint s3.example.com and bucket foobar the hostname would be
		 * foobar.s3.example.com
		 */
		if (!in_array($endpoint, array('s3.amazonaws.com', 'amazonaws.com.cn')))
		{
			return $hostname;
		}

		/**
		 * If we are using Amazon S3 with v2 signatures we have to use virual hosting (old-style) hostnames. So, a
		 * bucket called foobar needs to be accessed through the hostname foobar.s3.amazonaws.com
		 */
		if ($configuration->getSignatureMethod() != 'v4')
		{
			return $hostname;
		}

		/**
		 * If we are not asked to use legacy path style access return the virtual hosting style hostname
		 */
		if (!$configuration->getUseLegacyPathStyle())
		{
			/**
			 * Apparently this used to be required by Amazon when I first wrote that code. Then Amazon decided it's
			 * pretty lame not using the different hostnames per region (see below) and reverted this behaviour. To make
			 * things interesting, Amazon decided to let the old buckets be accessible from a generic hostname in a full
			 * b/c fashion BUT newly created buckets would not be allowed to be accessed with the generic hostname.
			 * Therefore we have to remove that workaround for the old Amazon S3 inconsistency.
			 *
			 * Oh, in case you are wondering, no, Amazon did NOT update their v4 authentication documentation. If you
			 * are reading this while trying to find why the v4 authentication does not work if you implement it exactly
			 * per Amazon's documentation I feel for you. Shut down your computer and head to the nearest bar. Get
			 * hammered. Come back to writing code tomorrow. There you go, dude... *pat on the back*
			 */
			// return $hostname;
		}

		/**
		 * When using the Amazon S3 with the v4 signature API we have to use a different hostname per region. The
		 * mapping can be found in http://docs.aws.amazon.com/general/latest/gr/rande.html#s3_region and boils down to
		 * the replacing s3.amazonaws.com with s3-REGION.amazonaws.com  The only exception is the old, very first S3
		 * region us-east-1 whose regional hostname is s3-external-1.amazonaws.com just to make our life harder...
		 *
		 * Also China (cn-north-1) where it is s3.cn-north-1.amazonaws.com.cn
		 */

		$region = $configuration->getRegion();

		if ($region == 'us-east-1')
		{
			$region = 'external-1';
		}
		elseif ($region == 'cn-north-1')
		{
			return 's3.' . $region . '.' . $endpoint;
		}

		return str_replace('s3', 's3-' . $region, $endpoint);
	}
}
