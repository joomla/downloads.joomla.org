<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Load page translations
JFactory::getLanguage()->load('page_home', JPATH_SITE);
?>

<div class="custom <?php echo $moduleclass_sfx; ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage'); ?>)"<?php endif; ?> >
	<h2><?php echo JText::_('HP_BANNER_HEADER'); ?></h2>
<div class="row-fluid top">
<div class="span6">
	<a id="latest" class="btn btn-success" title="<?php echo JText::_('HP_BANNER_DOWNLOAD'); ?>" href="<?php echo JHtml::_('content.prepare', '{arslatest item_link \'Joomla*Stable-Full_Package.zip\' Joomla! 4}'); ?>">
		<span class="title">
			<i class="icon-download">  </i>
			<?php echo JText::_('HP_BANNER_DOWNLOAD') . ' ' . JHtml::_('content.prepare', '{arslatest release Joomla! 4}'); ?>
		</span>
		<br />
		English (UK), 
		<?php echo JHtml::_('content.prepare', '{arslatest release Joomla! 4}') . ' ' . JText::_('HP_BANNER_PACKAGE'); ?>, ZIP
	</a>
	<p>
	<?php echo JText::_('HP_BANNER_DESCPART1') . ' ' . JHtml::_('content.prepare', '{arslatest release Joomla! 4}') . ' ' . JText::_('HP_BANNER_DESCPART2'); ?>
	<a title="<?php echo JText::_('HP_BANNER_LINKTITLE1'); ?>" href="https://www.joomla.org/core-features.html" target="_blank">
		<?php echo JText::_('HP_BANNER_DESCPART3'); ?>
	</a>
	<?php echo JText::_('HP_BANNER_DESCPART4'); ?>
	<a title="<?php echo JText::_('HP_BANNER_LINKTITLE2'); ?>" href="<?php echo JHtml::_('content.prepare', '{arslatest release_announcements Joomla! 4}'); ?>" target="_blank">
	<?php echo JText::_('HP_BANNER_DESCPART5'); ?></a> 
	<?php echo JText::_('HP_BANNER_DESCPART6'); ?></p>
</div>
<div class="span6"><a class="btn btn-success" title="<?php echo JText::_('HP_BANNER_DOWNLOAD'); ?> <?php echo JText::_('HP_BANNER_UPGRADEPACK'); ?>" href="<?php echo JHtml::_('content.prepare', '{arslatest release_link Joomla! 4}'); ?>">
<span class="title"><i class="icon-download"> </i><?php echo JText::_('HP_BANNER_UPGRADEPACK'); ?></span><br /><?php echo JText::_('HP_BANNER_UPGRADEPACKVERSION'); ?></a>
<p><?php echo JText::_('HP_BANNER_UPDATEINSTRUCTIONS'); ?></p>
</div>
</div>
<h2 class="counts"><?php echo JText::_('HP_BANNER_DOWNLOADEDOVER'); ?> <?php echo JHtml::_('content.prepare', '{arslatest vgroup_downloads 1} '); ?>
<?php echo JText::_('HP_BANNER_DOWNLOADEDTIMES'); ?></h2>
</div>
