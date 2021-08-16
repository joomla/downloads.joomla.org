<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Load page translations
JFactory::getLanguage()->load('page_home', JPATH_SITE);

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

?>
<div class="item-page <?php echo $this->pageclass_sfx; ?>" itemscope="" itemtype="https://schema.org/Article">
<meta itemprop="inLanguage" content="<?php echo ($this->item->language === '*') ? JFactory::getConfig()->get('language') : $this->item->language; ?>" />

	<?php // Content is generated by content plugin event "onContentAfterTitle" ?>
	<?php echo $this->item->event->afterDisplayTitle; ?>


	<?php // Content is generated by content plugin event "onContentBeforeDisplay" ?>
	<?php echo $this->item->event->beforeDisplayContent; ?>
	
	<div itemprop="articleBody">
			<h2 class="center hp"><?php echo JText::_('HP_CONTENT_HEADER_EXTEND'); ?></h2>
		<div class="row-fluid center marge">
			<div class="span6"><img src="/images/homepage/joomla-languages.png" alt="<?php echo JText::_('HP_CONTENT_LANGUAGE_HEADER'); ?>">
				<h3><?php echo JText::_('HP_CONTENT_LANGUAGE_HEADER'); ?></h3>
				<p><?php echo JText::_('HP_CONTENT_LANGUAGE_TEXT'); ?></p>
					<a class="btn btn-primary" title="<?php echo JText::_('HP_CONTENT_LANGUAGE_PACKAGES'); ?>" href="https://downloads.joomla.org/language-packs" rel="noopener noreferrer">
					<?php echo JText::_('HP_CONTENT_LANGUAGE_DOWNLOAD'); ?></a>
			</div>

			<div class="span6"><img src="/images/homepage/joomla-extensions.png" alt="Joomla Extensions">
			<h3><?php echo JText::_('HP_CONTENT_EXTENSIONS_HEADER'); ?></h3>
				<p><?php echo JText::_('HP_CONTENT_EXTENSIONS_TEXT'); ?></p>
				<a class="btn btn-primary" title="<?php echo JText::_('HP_CONTENT_EXTENSIONS_SITE'); ?>" href="https://extensions.joomla.org" target="_blank" rel="noopener noreferrer">
				<?php echo JText::_('HP_CONTENT_EXTENSIONS_SITE'); ?></a>
			</div>
		</div>

			<h2 class="center hp"><?php echo JText::_('HP_CONTENT_HEADER_TRY'); ?></h2>
		<div class="row-fluid center marge try">
			<div class="span6">
				<a class="btn btn-blue" title="<?php echo JText::_('HP_CONTENT_DISCOVER_BTITLE'); ?>" href="https://www.joomla.org/4/en/" target="_blank" rel="noopener noreferrer">
				<span class="title"><?php echo JText::_('HP_CONTENT_DISCOVER_BTITLE'); ?></span><br><?php echo JText::_('HP_CONTENT_DISCOVER_BTEXT'); ?></a>
			</div>
			<div class="span6"><a class="btn btn-blue" title="<?php echo JText::_('HP_CONTENT_LAUNCH_BTITLE'); ?>" href="https://launch.joomla.org" target="_blank" rel="noopener noreferrer">
				<span class="title"><?php echo JText::_('HP_CONTENT_LAUNCH_BTITLE'); ?></span><br><?php echo JText::_('HP_CONTENT_LAUNCH_BTEXT'); ?></a>
			</div>
		</div>
			<h2 class="hp center"><?php echo JText::_('HP_CONTENT_HEADER_SUPPORT'); ?></h2>
		<div class="row-fluid center support">
			<div class="span4"><img src="/images/homepage/joomla-forum.png" alt="<?php echo JText::_('HP_CONTENT_FORUM_LINKIMG'); ?>">
				<h3><?php echo JText::_('HP_CONTENT_FORUM_TITLE'); ?></h3>
				<p><?php echo JText::_('HP_CONTENT_FORUM_TEXT'); ?></p>
				<a class="btn" title="<?php echo JText::_('HP_CONTENT_FORUM_LINKIMG'); ?>" href="http://forum.joomla.org" target="_blank" rel="noopener noreferrer"><?php echo JText::_('HP_CONTENT_FORUM_BUTTON'); ?></a>
            </div>
			<div class="span4"><img src="/images/homepage/joomla-documentation.png" alt="<?php echo JText::_('HP_CONTENT_DOCUMENTATION_LINKIMG'); ?>">
				<h3><?php echo JText::_('HP_CONTENT_DOCUMENTATION_TITLE'); ?></h3>
				<p><?php echo JText::_('HP_CONTENT_DOCUMENTATION_TEXT'); ?></p>
				<a class="btn" title="<?php echo JText::_('HP_CONTENT_DOCUMENTATION_LINKIMG'); ?>" href="https://docs.joomla.org/S:MyLanguage/Main_Page" target="_blank" rel="noopener noreferrer"><?php echo JText::_('HP_CONTENT_DOCUMENTATION_BUTTON'); ?></a>
            </div>
			<div class="span4"><img src="/images/homepage/joomla-issue-tracker.png" alt="<?php echo JText::_('HP_CONTENT_TRACKER_LINKIMG'); ?>">
				<h3><?php echo JText::_('HP_CONTENT_TRACKER_TITLE'); ?></h3>
				<p><?php echo JText::_('HP_CONTENT_TRACKER_TEXT'); ?></p>
				<a class="btn" title="<?php echo JText::_('HP_CONTENT_TRACKER_LINKIMG'); ?>" href="https://issues.joomla.org" target="_blank" rel="noopener noreferrer"><?php echo JText::_('HP_CONTENT_TRACKER_BUTTON'); ?></a>
			</div>
        </div>       
		<div class="row-fluid center marge support">
			<div class="span4"><img src="/images/homepage/joomla-migration.png" alt="<?php echo JText::_('HP_CONTENT_MIGRATE_LINKIMG'); ?>">
				<h3><?php echo JText::_('HP_CONTENT_MIGRATE_TITLE'); ?></h3>
				<p><?php echo JText::_('HP_CONTENT_MIGRATE_TEXT'); ?></p>
				<a class="btn" title="<?php echo JText::_('HP_CONTENT_MIGRATE_LINKIMG'); ?>" href="https://docs.joomla.org/S:MyLanguage/Why_Migrate" target="_blank" rel="noopener noreferrer"><?php echo JText::_('HP_CONTENT_MIGRATE_BUTTON'); ?></a>
            </div>
			<div class="span4"><img src="/images/homepage/joomla-25-upgrade.png" alt="<?php echo JText::_('HP_CONTENT_MIGRATE25_TITLE'); ?>">
				<h3><?php echo JText::_('HP_CONTENT_MIGRATE25_TITLE'); ?></h3>
				<p><?php echo JText::_('HP_CONTENT_MIGRATE25_TEXT1'); ?><br><a title="<?php echo JText::_('HP_CONTENT_MIGRATE25_LINK'); ?>" href="https://docs.joomla.org/S:MyLanguage/Planning_for_Mini-Migration_-_Joomla_2.5_to_4.x" target="_blank" rel="noopener noreferrer"><?php echo JText::_('HP_CONTENT_MIGRATE25_TEXT2'); ?></a></p>
				<a class="btn" title="<?php echo JText::_('HP_CONTENT_MIGRATE25_BUTTON'); ?>" href="/cms/joomla25/2-5-28"><?php echo JText::_('HP_CONTENT_MIGRATE25_BUTTON'); ?></a>
            </div>
			<div class="span4"><img src="/images/homepage/joomla-15-upgrade.png" alt="<?php echo JText::_('HP_CONTENT_MIGRATE15_TITLE'); ?>">
				<h3><?php echo JText::_('HP_CONTENT_MIGRATE15_TITLE'); ?></h3>
				<p><?php echo JText::_('HP_CONTENT_MIGRATE15_TEXT1'); ?><br><a title="<?php echo JText::_('HP_CONTENT_MIGRATE15_LINK'); ?>" href="https://docs.joomla.org/S:MyLanguage/Planning_Migration_-_Joomla_1.5_to_4" target="_blank" rel="noopener noreferrer"><?php echo JText::_('HP_CONTENT_MIGRATE15_TEXT2'); ?></a></p>
				<a class="btn" title="<?php echo JText::_('HP_CONTENT_MIGRATE15_BUTTON'); ?>" href="/cms/joomla15/1-5-26"><?php echo JText::_('HP_CONTENT_MIGRATE15_BUTTON'); ?></a></div>
			</div>
		</div>
	<?php // Content is generated by content plugin event "onContentAfterDisplay" ?>
	<?php echo $this->item->event->afterDisplayContent; ?>

</div>
