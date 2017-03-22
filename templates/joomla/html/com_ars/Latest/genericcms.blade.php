<?php
/**
 * @package   AkeebaReleaseSystem
 * @copyright Copyright (c)2010 Nicholas K. Dionysopoulos
 * @license   GNU General Public License version 3, or later
 */

defined('_JEXEC') or die;

/** @var  \Akeeba\ReleaseSystem\Site\View\Latest\Html  $this */
?>
<div class="ars-categories-{{ $section }}">
	@if(empty($this->categories))
		<p class="muted ars-no-items">
			@lang('ARS_NO_CATEGORIES')
		</p>
	@else
		@foreach($this->vgroups as $vgroup)
			@unless($vgroup->numitems[$section] == 0)
				<div class="ars-vgroup-{{{ $vgroup->id }}}">
					@foreach($this->categories->filter(function ($item)
						{
							return \Akeeba\ReleaseSystem\Site\Helper\Filter::filterItem($item, true);
						}) as $id => $item)
						@unless($item->vgroup_id != $vgroup->id)
							@if(($item->type == $section) || ($section == 'all'))
								@include('site:com_ars/Latest/cmscategory', ['id' => $id, 'item' => $item, 'Itemid' => $this->Itemid, 'view' => 'latest'])
							@endif
						@endunless
					@endforeach
				</div>
			@endunless
		@endforeach
	@endif
</div>
