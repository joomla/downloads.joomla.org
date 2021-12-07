<?php
defined('_JEXEC') or die;

/** @var  \Akeeba\ReleaseSystem\Site\View\Categories\Html  $this */
/** @var  \Akeeba\ReleaseSystem\Site\Model\Categories $item */
?>

<div class="item-page{{{ $this->params->get('pageclass_sfx') }}}">
	@if($this->params->get('show_page_heading'))
	<div class="page-header">
		<h1>{{{ $this->params->get('page_heading', $this->menu->title) }}}</h1>
	</div>
	@endif

		@if(is_object($this->menu))
			<?php
			// Do we have the vgroup IDs?
			?>
			@if(isset($this->menu->query) && isset($this->menu->query['vgroupid']))
				<?php
				// CMS vgroup
				?>
				@if($this->menu->query['vgroupid'] == 1)
					@include('site:com_ars/Categories/genericcms', ['section' => 'normal', 'title' => ''])
				@else
					@include('site:com_ars/Categories/generic', ['section' => 'normal', 'title' => ''])
				@endif
			@else
				@include('site:com_ars/Categories/generic', ['section' => 'normal', 'title' => ''])
			@endif
		@else
			@include('site:com_ars/Categories/generic', ['section' => 'normal', 'title' => ''])
		@endif
</div>
