<?php
/**
 * @package   AkeebaReleaseSystem
 * @copyright Copyright (c)2010-2018 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

defined('_JEXEC') or die();

/** @var \Akeeba\ReleaseSystem\Site\View\Update\Xml $this */

use Akeeba\ReleaseSystem\Site\Helper\Router;
use Akeeba\ReleaseSystem\Site\Helper\Filter;

$rootURL    = rtrim(JURI::base(), '/');
$subpathURL = JURI::base(true);

if (!empty($subpathURL) && ($subpathURL != '/'))
{
	$rootURL = substr($rootURL, 0, -1 * strlen($subpathURL));
}

$tag = "<" . "?xml version=\"1.0\" encoding=\"utf-8\"" . "?" . ">";

$streamTypeMap = array(
	'components' => 'component',
	'libraries'  => 'library',
	'modules'    => 'module',
	'packages'   => 'package',
	'plugins'    => 'plugin',
	'files'      => 'file',
	'templates'  => 'template'
);

$dlid = trim($this->input->getCmd('dlid', ''));

if (!empty($dlid))
{
	$dlid = Filter::reformatDownloadID($dlid);
}

if (!empty($dlid))
{
	$dlid = '&dlid=' . $dlid;
}
else
{
	$dlid = '';
}

// Clear everything before starting the output
@ob_end_clean();

// Tell the client this is an XML file
@header('Content-type: application/xml');

// Custom header for SiteGround's SuperCacher. The default value caches the
// output for 5 minutes.
JFactory::getApplication()->setHeader('X-Akeeba-Expire-After', 300);

require_once JPATH_SITE . '/components/com_ars/router.php';
ComArsRouter::$routeRaw  = false;
ComArsRouter::$routeHtml = false;

$jVersion = new JVersion;

?><?php echo $tag; ?>
<!-- Update stream generated automatically by Akeeba Release System on <?= gmdate('Y-m-d H:i:s') ?> GMT -->
<updates>
<?php
foreach ($this->items as $item):
	switch ($item->itemtype)
	{
		case 'file':
			$downloadURL =
				$rootURL . Router::_('index.php?option=com_ars&view=Item&task=download&format=raw&id=' . $item->item_id . $dlid);
			$basename    = basename($item->filename);

			if (substr(strtolower($basename), -4) == '.zip')
			{
				$format = 'zip';
			}
			elseif (substr(strtolower($basename), -4) == '.tgz')
			{
				$format = 'tgz';
			}
			elseif (substr(strtolower($basename), -7) == '.tar.gz')
			{
				$format = 'tgz';
			}
			elseif (substr(strtolower($basename), -4) == '.tar')
			{
				$format = 'tar';
			}
			elseif (substr(strtolower($basename), -8) == '.tar.bz2')
			{
				$format = 'tbz2';
			}
			elseif (substr(strtolower($basename), -4) == '.tbz')
			{
				$format = 'tbz2';
			}
			elseif (substr(strtolower($basename), -5) == '.tbz2')
			{
				$format = 'tbz2';
			}
			else
			{
				$format = 'UNSUPPORTED';
			}

			if ($format != 'UNSUPPORTED')
			{
				$downloadURL .= '&amp;dummy=my.' . $format;
			}
			break;

		case 'link':
		default:
			$downloadURL = $item->url;
			$basename    = basename($item->url);
			break;
	}

	if (!empty($item->environments) && is_array($item->environments))
	{
		$platforms = array();

		foreach ($item->environments as $eid)
		{
			if (isset($this->envs[ $eid ]))
			{
				$platforms[] = $this->envs[ $eid ]->xmltitle;
			}
		}

		if (empty($platforms))
		{
			$platforms = [
				'joomla/' . $jVersion->RELEASE,
				'php/' . PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION
			];
		}
	}
	else
	{
		$platforms = [
			'joomla/' . $jVersion->RELEASE,
			'php/' . PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION
		];
	}

	$parsedPlatforms = [
		'platforms' => [],
		'php'		=> []
	];

	foreach ($platforms as $platform)
	{
		$platformParts = explode('/', $platform, 2);

		switch (count($platformParts))
		{
			case 1:
				$platformName    = 'joomla';
				$platformVersion = $platformParts[0];
				break;
			default:
				$platformName    = $platformParts[0];
				$platformVersion = $platformParts[1];
				break;
		}

		if (strtolower($platformName) == 'php')
		{
			$parsedPlatforms['php'][] = $platformVersion;

			continue;
		}

		$parsedPlatforms['platforms'][] = [$platformName, $platformVersion];
	}



	foreach ($parsedPlatforms['platforms'] as $platform):
		list($platformName, $platformVersion) = $platform;
?>
	<update>
		<name><![CDATA[<?php echo $item->name ?>]]></name>
		<description><![CDATA[<?php echo $item->name ?>]]></description>
		<element><?php echo $item->element ?></element>
		<type><?php echo $streamTypeMap[ $item->type ]; ?></type>
		<version><?php echo $item->version ?></version>
		<infourl
            title="<?php echo $item->cat_title . ' ' . $item->version ?>"><?php echo $rootURL . Router::_('index.php?option=com_ars&view=Items&release_id=' . $item->release_id) ?></infourl>
		<downloads>
			<downloadurl type="full"
						 format="<?php echo $format ?>"><?php echo $downloadURL ?></downloadurl>
		</downloads>
		<tags>
			<tag><?php echo $item->maturity ?></tag>
		</tags>
		<maintainer><![CDATA[<?php echo $this->container->platform->getConfig()->get('sitename'); ?>]]></maintainer>
		<maintainerurl><?php echo JURI::base(); ?></maintainerurl>
		<section>Updates</section>
		<targetplatform name="<?php echo $platformName ?>" version="<?php echo $platformVersion ?>"/>
		<?php if (!empty($item->md5)): ?>
		<md5><?php echo $this->escape($item->md5) ?></md5>
		<?php endif; ?>
		<?php if (!empty($item->sha1)): ?>
		<sha1><?php echo $this->escape($item->sha1) ?></sha1>
		<?php endif; ?>
		<?php if (!empty($item->sha256)): ?>
		<sha256><?php echo $this->escape($item->sha256) ?></sha256>
		<?php endif; ?>
		<?php if (!empty($item->sha384)): ?>
		<sha384><?php echo $this->escape($item->sha384) ?></sha384>
		<?php endif; ?>
		<?php if (!empty($item->sha512)): ?>
		<sha512><?php echo $this->escape($item->sha512) ?></sha512>
		<?php endif; ?>
		<?php if (($platformName == 'joomla') && (version_compare($platformVersion, '2.5', 'lt'))): ?>
			<client_id><?php echo (int)$item->client_id ?></client_id>
		<?php else: ?>
			<client><?php echo (int)$item->client_id ?></client>
		<?php endif; ?>
		<folder><?php echo empty($item->folder) ? '' : $item->folder ?></folder>
		<?php if (!empty($parsedPlatforms['php'])): ?>
		<?php foreach ($parsedPlatforms['php'] as $phpVersion): ?>
		<ars-phpcompat version="<?php echo $phpVersion ?>" />
		<?php endforeach; ?>
		<?php endif; ?>
	</update>
	<?php
	endforeach;
endforeach;

// Just some debugging info I'm using while tuning the performance of this page
if (defined('JDEBUG') && JDEBUG && false):
	?>
	<debug>
		<dbqueries>
			<?php foreach ($this->getContainer()->db->getLog() as $i => $query): ?>
				<query count="<?= $i ?>"><![CDATA[<?= $query ?>]]></query>
			<?php endforeach; ?>
		</dbqueries>
		<profile>
			<?php foreach (JProfiler::getInstance('Application')->getBuffer() as $mark): ?>
				<mark><?= $mark ?></mark>
			<?php endforeach; ?>
		</profile>
	</debug>
<?php endif; ?>
</updates>
