<?php
/**
 * @package   AkeebaReleaseSystem
 * @copyright Copyright (c)2010 Nicholas K. Dionysopoulos
 * @license   GNU General Public License version 3, or later
 */

defined('_JEXEC') or die;

/** @var  \Akeeba\ReleaseSystem\Site\View\Latest\Html  $this */

// If we have the menu item configuration, attempt to load custom layouts based on the menu config
?>
<div class="item-page{{{ $this->params->get('pageclass_sfx') }}}">
	<div class="page-header">
		<h1>
	@if($this->params->get('show_page_heading') && is_object($this->menu))
		{{{ $this->params->get('page_heading', $this->menu->title) }}}
	@else
		@lang('ARS_VIEW_LATEST_TITLE')
	@endif
		</h1>
	</div>

	@if(is_object($this->menu))
		<?php
		// Do we have the vgroup IDs?
		?>
		@if(isset($this->menu->query) && isset($this->menu->query['vgroupid']))
			<?php
			// CMS vgroup
			?>
			@if($this->menu->query['vgroupid'] == 1)
				@include('site:com_ars/Latest/genericcms', ['section' => 'normal', 'title' => ''])
			@endif
		@else
			@if($this->params->get('grouping', 'normal') == 'none')
				@include('site:com_ars/Latest/generic', ['section' => 'all', 'title' => ''])
			@else
				@include('site:com_ars/Latest/generic', ['section' => 'normal', 'title' => 'ARS_CATEGORY_NORMAL'])
				@include('site:com_ars/Latest/generic', ['section' => 'bleedingedge', 'title' => 'ARS_CATEGORY_BLEEDINGEDGE'])
			@endif
		@endif
	@else
		@if($this->params->get('grouping', 'normal') == 'none')
			@include('site:com_ars/Latest/generic', ['section' => 'all', 'title' => ''])
		@else
			@include('site:com_ars/Latest/generic', ['section' => 'normal', 'title' => 'ARS_CATEGORY_NORMAL'])
			@include('site:com_ars/Latest/generic', ['section' => 'bleedingedge', 'title' => 'ARS_CATEGORY_BLEEDINGEDGE'])
		@endif
	@endif
</div>
