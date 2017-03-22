<?php
defined('_JEXEC') or die;

/** @var  \Akeeba\ReleaseSystem\Site\View\Categories\Html  $this */
/** @var  \Akeeba\ReleaseSystem\Site\Model\Categories $item */

?>
<div class="ars-categories-{{ $section }}">
	@unless(empty($title))
		<div class="page-header">
			<h2>@lang($title)</h2>
		</div>
	@endunless

	@if(empty($this->items))
		<p class="muted ars-no-items">
			@lang('ARS_NO_CATEGORIES')
		</p>
	@else
		@foreach($this->vgroups as $vgroup)
			@unless($vgroup->numitems[$section] == 0)
				<div class="ars-vgroup-{{{ $vgroup->id }}}">
					<div class="page-header">
						<h2>@lang('ARS_SUPPORTED_RELEASES')</h2>
					</div>
					@foreach($this->items->filter(function ($item)
					{
						if ($item->is_supported)
						{
							return $item;
						}
					}) as $id => $item)
						@unless($item->vgroup_id != $vgroup->id)
							@if(($item->type == $section) || ($section == 'all'))
								@include('site:com_ars/Categories/cmscategory', ['id' => $id, 'item' => $item, 'Itemid' => $this->Itemid, 'view' => 'categories'])
							@endif
						@endunless
					@endforeach

					<div class="page-header">
						<h2>@lang('ARS_UNSUPPORTED_RELEASES')</h2>
					</div>
					<div class="row-fluid">
					@foreach($this->items->filter(function ($item)
					{
						if (!$item->is_supported)
						{
							return $item;
						}
					}) as $id => $item)
						@unless($item->vgroup_id != $vgroup->id)
							@if(($item->type == $section) || ($section == 'all'))
								<div class="span4">
								@include('site:com_ars/Categories/cmscategory', ['id' => $id, 'item' => $item, 'Itemid' => $this->Itemid, 'view' => 'categories'])
								</div>
							@endif
						@endunless
					@endforeach
					</div>
				</div>
			@endunless
		@endforeach
	@endif
</div>
