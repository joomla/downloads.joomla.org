<?php
/**
 * @package   AkeebaReleaseSystem
 * @copyright Copyright (c)2010 Nicholas K. Dionysopoulos
 * @license   GNU General Public License version 3, or later
 */

defined('_JEXEC') or die;

/** @var  \Akeeba\ReleaseSystem\Site\View\Items\Html  $this */

$released   = $this->container->platform->getDate($this->release->created);

// We only show the page heading for the menu item, not its children
$isMenuItemView = isset($this->menu->query) && isset($this->menu->query['view']) && $this->menu->query['view'] == 'Categories' && $this->input->getString('view') == $this->menu->query['view'];

if (!$isMenuItemView)
{
	$app = \JFactory::getApplication();

	$sitename = $app->get('sitename');

	$title       = '';
	$description = '';

	if ($this->release->category->visualGroup->id == 1)
	{
		$title       = \JText::sprintf('ARS_CMS_RELEASE_BROWSER_TITLE', $this->release->version);
		$description = \JText::sprintf('ARS_CMS_RELEASE_BROWSER_DESCRIPTION', $this->release->version);
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
			{{{ $this->params->get('page_heading', $this->menu->title) . ' ' . $this->release->version }}}
		</h1>
	</div>
	@endif

	@include('site:com_ars/Items/release', ['id' => $this->release->id, 'item' => $this->release, 'Itemid' => $this->Itemid, 'no_link' => true, 'isMenuItemView' => $isMenuItemView])

	<div class="ars-items <?php echo $this->release->category->is_supported ? 'supported' : 'unsupported'; ?>">
		@if(count($this->items))
			@if($this->release->category->visualGroup->id == 1)
				<h2>@lang('ARS_CMS_FULL_DOWNLOADS')</h2>
				<p class="lead">@lang('ARS_CMS_FULL_DOWNLOADS_LEAD')</p>
				<div class="row-fluid">
				@foreach($this->items->filter(function ($item)
				{
					if (strpos($item->title, 'Full Package') !== false)
					{
						return \Akeeba\ReleaseSystem\Site\Helper\Filter::filterItem($item, true);
					}
				}) as $item)
					<div class="span4">
					@include('site:com_ars/Items/item', ['item' => $item, 'Itemid' => $this->Itemid, 'isMenuItemView' => $isMenuItemView])
					</div>
				@endforeach
				</div>
				<h2>@lang('ARS_CMS_UPDATE_DOWNLOADS')</h2>
				<p class="lead">@lang('ARS_CMS_UPDATE_DOWNLOADS_LEAD')</p>
				@foreach($this->items->filter(function ($item)
				{
					if (strpos($item->title, 'Full Package') === false)
					{
						return \Akeeba\ReleaseSystem\Site\Helper\Filter::filterItem($item, true);
					}
				}) as $item)
					@include('site:com_ars/Items/item', ['item' => $item, 'Itemid' => $this->Itemid, 'isMenuItemView' => $isMenuItemView])
				@endforeach
			@else
				@foreach($this->items as $item)
					@include('site:com_ars/Items/item', ['item' => $item, 'Itemid' => $this->Itemid, 'isMenuItemView' => $isMenuItemView])
				@endforeach
			@endif
		@else
			<div class="ars-noitems">
				@lang('ARS_NO_ITEMS')
			</div>
		@endif
	</div>

	<form id="ars-pagination" action="{{ \JURI::getInstance()->toString() }}" method="post">
		<input type="hidden" name="option" value="com_ars" />
		<input type="hidden" name="view" value="Items" />
		<input type="hidden" name="release_id" value="{{{ $this->release->id }}}" />

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
		@lang('ARS_ITEMS_PER_PAGE')
		{{ $this->pagination->getLimitBox() }}
		@endif
	</form>
</div>
