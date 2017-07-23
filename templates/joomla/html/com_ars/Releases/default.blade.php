<?php
/**
 * @package   AkeebaReleaseSystem
 * @copyright Copyright (c)2010 Nicholas K. Dionysopoulos
 * @license   GNU General Public License version 3, or later
 */

defined('_JEXEC') or die;

/** @var  \Akeeba\ReleaseSystem\Site\View\Releases\Html  $this */

// We only show the page heading for the menu item, not its children
$isMenuItemView = isset($this->menu->query) && isset($this->menu->query['view']) && $this->menu->query['view'] == 'Categories' && $this->input->getString('view') == $this->menu->query['view'];

if (!$isMenuItemView)
{
	$app = \JFactory::getApplication();

	$sitename = $app->get('sitename');

	$title       = '';
	$description = '';

	if ($this->category->visualGroup->id == 1)
	{
		$titleLangKey = 'ARS_CMS_RELEASES_BROWSER_TITLE_' . strtoupper(str_replace([' ', '!'], '', $this->category->title));
		$descLangKey  = 'ARS_CMS_RELEASES_BROWSER_DESCRIPTION_' . strtoupper(str_replace([' ', '!'], '', $this->category->title));
		$title        = \JText::_($titleLangKey);
		$description  = \JText::_($descLangKey);
	}
	elseif ($this->category->visualGroup->id == 5)
	{
		$titleLangKey = 'ARS_EXTENSIONS_RELEASES_BROWSER_TITLE_' . strtoupper(str_replace([' ', '!'], '', $this->category->title));
		$descLangKey  = 'ARS_EXTENSIONS_RELEASES_BROWSER_DESCRIPTION_' . strtoupper(str_replace([' ', '!'], '', $this->category->title));
		$title        = \JText::_($titleLangKey);
		$description  = \JText::_($descLangKey);
	}

	if ($app->get('sitename_pagetitles', 0) == 1)
	{
		$title = \JText::sprintf('JPAGETITLE', $app->get('sitename'), $title);
	}
	elseif ($app->get('sitename_pagetitles', 0) == 2)
	{
		$title = \JText::sprintf('JPAGETITLE', $title, $app->get('sitename'));
	}

	if ($title)
	{
		$app->getDocument()->setTitle($title);
	}

	if ($description)
	{
		$app->getDocument()->setDescription($description);
	}
}
?>

<div class="item-page{{{ $this->params->get('pageclass_sfx') }}}">
	@if($isMenuItemView && $this->params->get('show_page_heading'))
	<div class="page-header">
		<h1>
			{{{ $this->params->get('page_heading', $this->menu->title) }}}
		</h1>
	</div>
	@endif

	@include('site:com_ars/Releases/category', ['id' => $this->category->id, 'item' => $this->category, 'Itemid' => $this->Itemid, 'no_link' => true, 'isMenuItemView' => $isMenuItemView])

	<div class="ars-releases ars-releases-{{ $this->category->is_supported ? 'supported' : 'unsupported' }}">
	@if(count($this->items))
		@foreach($this->items as $item)
			@include('site:com_ars/Releases/release', ['item' => $item, 'Itemid' => $this->Itemid, 'isMenuItemView' => $isMenuItemView])
		@endforeach
	@else
		<div class="ars-noitems">
			@lang('ARS_NO_RELEASES')
		</div>
	@endif
	</div>

	<form id="ars-pagination" action="{{ \JUri::getInstance()->toString() }}" method="post">
		<input type="hidden" name="option" value="com_ars" />
		<input type="hidden" name="view" value="Releases" />
		<input type="hidden" name="category_id" value="{{{ $this->category->id }}}" />

		@if ($this->params->get('show_pagination', 1))
			@if($this->pagination->pagesTotal > 1)
			<div class="pagination">

				@if($this->params->get('show_pagination_results', 1))
				<p class="counter">
					{{ $this->pagination->getPagesCounter() }}
				</p>
				@endif

				{{ $this->pagination->getPagesLinks() }}
			</div>

			@endif
		@lang('ARS_RELEASES_PER_PAGE')
		{{ $this->pagination->getLimitBox() }}
		@endif
	</form>
</div>
