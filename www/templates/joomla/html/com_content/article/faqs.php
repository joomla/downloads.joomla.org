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
JFactory::getLanguage()->load('page_faqs', JPATH_SITE);

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Find the route for the tech requirements page in the current language
// TODO - Prefer not to do a query here but the component's getAssociations helper excludes the current language from the query which makes my life miserable
$user      = JFactory::getUser();
$groups    = implode(',', $user->getAuthorisedViewLevels());
$db        = JFactory::getDbo();
$advClause = array();

// Filter by user groups
$advClause[] = 'c2.access IN (' . $groups . ')';

// Filter by current language
$advClause[] = 'c2.language IN (' . $db->quote('en-GB') . ', ' . $db->quote(JFactory::getLanguage()->getTag()) . ')';

if (!$user->authorise('core.edit.state', 'com_content') && !$user->authorise('core.edit', 'com_content'))
{
	// Filter by start and end dates.
	$nullDate = $db->quote($db->getNullDate());
	$date = JFactory::getDate();

	$nowDate = $db->quote($date->toSql());

	$advClause[] = '(c2.publish_up = ' . $nullDate . ' OR c2.publish_up <= ' . $nowDate . ')';
	$advClause[] = '(c2.publish_down = ' . $nullDate . ' OR c2.publish_down >= ' . $nowDate . ')';

	// Filter by published
	$advClause[] = 'c2.state = 1';
}

// Article ID 13 is the requirements page in English
$associations = JLanguageAssociations::getAssociations('com_content', '#__content', 'com_content.item', 13, 'id', 'alias', 'catid', $advClause);

$techRequirementsAssociations = array();

foreach ($associations as $tag => $item)
{
	$techRequirementsAssociations[$tag] = ContentHelperRoute::getArticleRoute($item->id, (int) $item->catid, $item->language, 'default');
}

$associatedLanguage = $this->item->language === '*' ? 'en-GB' : $this->item->language;
?>
<div class="item-page<?php echo $this->pageclass_sfx; ?>" itemscope itemtype="https://schema.org/Article">
	<meta itemprop="inLanguage" content="<?php echo ($this->item->language === '*') ? JFactory::getConfig()->get('language') : $this->item->language; ?>" />
	<div class="page-header">
		<h1><?php echo JText::_('FAQS_PAGE_HEADING'); ?></h1>
	</div>

	<?php if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime(JFactory::getDate()) || ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != JFactory::getDbo()->getNullDate())) : ?>
		<div class="page-header">
			<?php if ($this->item->state == 0) : ?>
				<span class="label label-warning"><?php echo JText::_('JUNPUBLISHED'); ?></span>
			<?php endif; ?>
			<?php if (strtotime($this->item->publish_up) > strtotime(JFactory::getDate())) : ?>
				<span class="label label-warning"><?php echo JText::_('JNOTPUBLISHEDYET'); ?></span>
			<?php endif; ?>
			<?php if ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != JFactory::getDbo()->getNullDate()) : ?>
				<span class="label label-warning"><?php echo JText::_('JEXPIRED'); ?></span>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php // Content is generated by content plugin event "onContentAfterTitle" ?>
	<?php echo $this->item->event->afterDisplayTitle; ?>

	<div class="article-info muted">
		<span class="icon-calendar" aria-hidden="true"></span> <time datetime="2021-08-17T00:00:00+00:00" itemprop="dateModified"><?php echo JText::sprintf('COM_CONTENT_LAST_UPDATED', JHtml::_('date', '2021-08-17 00:00:00', JText::_('DATE_FORMAT_LC3'))); ?></time>
	</div>

	<?php // Content is generated by content plugin event "onContentBeforeDisplay" ?>
	<?php echo $this->item->event->beforeDisplayContent; ?>

	<div itemprop="articleBody">
		<div class="row-fluid center">
			<div class="span4"><a class="btn btn-large btn-blue" href="https://docs.joomla.org" target="_blank" rel="noopener noreferrer"><?php echo JText::_('FAQS_BUTTON_JOOMLA_DOCUMENTATION'); ?></a></div>
			<div class="span4"><a class="btn btn-large btn-blue" href="<?php echo JRoute::_($techRequirementsAssociations[$associatedLanguage] ?? 'index.php?option=com_content&view=article&id=13:technical-requirements&catid=8&layout=default'); ?>"><?php echo JText::_('FAQS_BUTTON_TECHNICAL_REQUIREMENTS'); ?></a></div>
			<div class="span4"><a class="btn btn-large btn-blue" href="<?php echo JHtml::_('content.prepare', '{arslatest release_announcements Joomla! 4}'); ?>" target="_blank" rel="noopener noreferrer"><?php echo JText::_('FAQS_BUTTON_RELEASE_ANNOUNCEMENT'); ?></a></div>
		</div>

		<?php echo JHtml::_('bootstrap.startAccordion', 'faqs'); ?>

		<?php echo JHtml::_('bootstrap.addSlide', 'faqs', JText::_('FAQ_INSTALL_JOOMLA_LOCALLY_QUESTION'), 'faq-install-locally'); ?>
		<div><?php echo JText::_('FAQ_INSTALL_JOOMLA_LOCALLY_ANSWER'); ?></div>
		<?php echo JHtml::_('bootstrap.endSlide'); ?>

		<?php echo JHtml::_('bootstrap.addSlide', 'faqs', JText::_('FAQ_INSTALL_JOOMLA_ON_HOSTING_ACCOUNT_QUESTION'), 'faq-install-on-hosting'); ?>
		<div><?php echo JText::_('FAQ_INSTALL_JOOMLA_ON_HOSTING_ACCOUNT_ANSWER'); ?></div>
		<?php echo JHtml::_('bootstrap.endSlide'); ?>

		<?php echo JHtml::_('bootstrap.addSlide', 'faqs', JText::_('FAQ_FIND_JOOMLA_HOSTING_QUESTION'), 'faq-find-hosting'); ?>
		<div>
			<p><?php echo JText::_('FAQ_FIND_JOOMLA_HOSTING_ANSWER_INTRO'); ?></p>
			<ul>
				<li><?php echo JText::sprintf('FAQ_FIND_JOOMLA_HOSTING_ANSWER_SPONSOR_PAGE', JHtml::_('link', 'https://www.joomla.org/current-sponsors.html', 'Joomla Sponsors', ['target' => '_blank', 'rel' => 'noopener'])); ?></li>
				<li><?php echo JText::sprintf('FAQ_FIND_JOOMLA_HOSTING_ANSWER_SERVICE_PROVIDERS_PAGE', JHtml::_('link', 'https://community.joomla.org/service-providers-directory/listings/category/view/116-hosting-providers.html', 'Joomla Service Providers', ['target' => '_blank', 'rel' => 'noopener'])); ?></li>
				<li><?php echo JText::sprintf('FAQ_FIND_JOOMLA_HOSTING_ANSWER_HOST_CLOUDACCESS', JHtml::_('link', 'http://www.cloudaccess.net/products/joomla-hosting-support.html', 'CloudAccess', ['target' => '_blank', 'rel' => 'noopener noreferrer'])); ?></li>
				<li><?php echo JText::sprintf('FAQ_FIND_JOOMLA_HOSTING_ANSWER_HOST_ROCHEN', JHtml::_('link', 'https://www.rochen.com/joomla-hosting', 'Rochen', ['target' => '_blank', 'rel' => 'noopener noreferrer'])); ?></li>
			</ul>
			<p><?php echo JText::sprintf('FAQ_FIND_JOOMLA_HOSTING_ANSWER_BECOME_A_SPONSOR', JHtml::_('content.prepare', JHtml::_('link', 'mailto:sponsors@opensourcematters.org', 'sponsors@opensourcematters.org'))); ?></p>
		</div>
		<?php echo JHtml::_('bootstrap.endSlide'); ?>

		<?php echo JHtml::_('bootstrap.addSlide', 'faqs', JText::_('FAQ_IS_JOOMLA_MULTILINGUAL_QUESTION'), 'faq-multilingual'); ?>
		<div><?php echo JText::sprintf('FAQ_IS_JOOMLA_MULTILINGUAL_ANSWER', 75); ?></div>
		<?php echo JHtml::_('bootstrap.endSlide'); ?>

		<?php echo JHtml::_('bootstrap.addSlide', 'faqs', JText::_('FAQ_CUSTOMISE_JOOMLA_QUESTION'), 'faq-customise-joomla'); ?>
		<div><?php echo JText::sprintf('FAQ_CUSTOMISE_JOOMLA_ANSWER', number_format(8000, 0, JText::_('DECIMALS_SEPARATOR'), JText::_('THOUSANDS_SEPARATOR'))); ?></div>
		<?php echo JHtml::_('bootstrap.endSlide'); ?>

		<?php echo JHtml::_('bootstrap.addSlide', 'faqs', JText::_('FAQ_FIND_LEGACY_JOOMLA_VERSIONS_QUESTION'), 'faq-find-legacy-versions'); ?>
		<div><?php echo JText::sprintf('FAQ_FIND_LEGACY_JOOMLA_VERSIONS_ANSWER', JRoute::_('index.php?option=com_ars&view=Categories&layout=normal&vgroupid=1&lang=' . JFactory::getLanguage()->getTag())); ?></div>
		<?php echo JHtml::_('bootstrap.endSlide'); ?>

		<?php echo JHtml::_('bootstrap.addSlide', 'faqs', JText::_('FAQ_WHAT_ARE_FILE_SIGNATURES_QUESTION'), 'faq-file-signatures'); ?>
		<div><?php echo JText::_('FAQ_WHAT_ARE_FILE_SIGNATURES_ANSWER'); ?></div>
		<?php echo JHtml::_('bootstrap.endSlide'); ?>

		<?php echo JHtml::_('bootstrap.endAccordion'); ?>
	</div>

	<?php // Content is generated by content plugin event "onContentAfterDisplay" ?>
	<?php echo $this->item->event->afterDisplayContent; ?>
</div>