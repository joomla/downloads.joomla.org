<?php
defined('_JEXEC') or die;

/** @var  \Akeeba\ReleaseSystem\Site\View\Categories\Html $this */
/** @var  \Akeeba\ReleaseSystem\Site\Model\Categories $item */

use Akeeba\ReleaseSystem\Site\Helper\Filter;
use Akeeba\ReleaseSystem\Site\Helper\Router;
use Akeeba\ReleaseSystem\Admin\Helper\Format;

$extLangKey = 'ARS_EXTENSION_CATEGORY_' . strtoupper(str_replace([' ', '!'], '', $item->title)) . '_TITLE';
?>
<div class="ars-category-{{{ $id }}} <?php echo $item->is_supported ? 'supported' : 'unsupported'; ?>">
	@if($item->visualGroup->id == 1)
		@if(!$isMenuItemView)
		<div class="page-header">
			<h1>
				{{{ $item->title }}}
			</h1>
		</div>
		@else
			<h4 class="text-muted">
				{{{ $item->title }}}
			</h4>
		@endif
	@elseif($item->visualGroup->id == 5)
		@if(!$isMenuItemView)
		<div class="page-header">
			<h1>
				@lang($extLangKey)
			</h1>
		</div>
		@else
			<h4 class="text-muted">
				@lang($extLangKey)
			</h4>
		@endif
	@else
		<h4 class="text-muted">
			{{{ $item->title }}}
		</h4>
	@endif

	@if($item->visualGroup->id == 1 && !$item->is_supported)
		<div class="alert alert-warning">
			<h4>@lang('ARS_HEADS_UP_TITLE')</h4>
			@lang('ARS_UNSUPPORTED_CMS_CATEGORY')
		</div>
	@endif
</div>
