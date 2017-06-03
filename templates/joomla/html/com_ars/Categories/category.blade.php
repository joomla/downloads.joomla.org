<?php
defined('_JEXEC') or die;

/** @var  \Akeeba\ReleaseSystem\Site\View\Categories\Html $this */
/** @var  \Akeeba\ReleaseSystem\Site\Model\Categories $item */

use Akeeba\ReleaseSystem\Site\Helper\Filter;
use Akeeba\ReleaseSystem\Site\Helper\Router;
use Akeeba\ReleaseSystem\Admin\Helper\Format;

$category_url = Router::_('index.php?option=com_ars&view=Releases&category_id=' . $item->id . '&Itemid=' . $Itemid);

if (!Filter::filterItem($item, false, $this->getContainer()->platform->getUser()->getAuthorisedViewLevels()) && !empty($item->redirect_unauth))
{
	$category_url = $item->redirect_unauth;
}

$langKey = 'ARS_EXTENSION_CATEGORY_' . strtoupper(str_replace([' ', '!'], '', $item->title));
?>
<div class="ars-category-{{{ $id }}} well <?php echo $item->is_supported ? 'supported' : 'unsupported'; ?>">
	<h3{{ $item->type == 'bleedingedge' ? ' class="warning"' : '' }}>
		{{{ $item->title }}}
	</h3>

	@unless(empty($item->description))
		<div class="ars-item-description">
			@lang($langKey)
		</div>
	@endunless

	<p class="readmore">
		<a class="btn btn-primary" href="{{ htmlentities($category_url) }}">
			@lang('LBL_CATEGORY_EXTENSION_VIEW')
		</a>
	</p>
</div>
