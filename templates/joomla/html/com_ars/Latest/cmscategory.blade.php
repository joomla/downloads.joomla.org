<?php
/**
 * @package   AkeebaReleaseSystem
 * @copyright Copyright (c)2010 Nicholas K. Dionysopoulos
 * @license   GNU General Public License version 3, or later
 */

defined('_JEXEC') or die;

/** @var  \Akeeba\ReleaseSystem\Site\View\Latest\Html $this */
/** @var  \Akeeba\ReleaseSystem\Site\Model\Categories $item */

use Akeeba\ReleaseSystem\Site\Helper\Filter;
use Akeeba\ReleaseSystem\Site\Helper\Router;
use Akeeba\ReleaseSystem\Admin\Helper\Format;

// Do I have a release?
if (!isset($this->releases[$item->id]))
{
	return;
}

/** @var \Akeeba\ReleaseSystem\Site\Model\Releases $release */
$release = $this->releases[$item->id];
$released = $this->container->platform->getDate($release->created);
$release_url = Router::_('index.php?option=com_ars&view=Items&release_id=' . $release->id . '&Itemid=' . $Itemid);
$authorisedViewLevels = $this->getContainer()->platform->getUser()->getAuthorisedViewLevels();

if (!Filter::filterItem($release, false, $authorisedViewLevels) && !empty($release->redirect_unauth))
{
	$release_url = $release->redirect_unauth;
}

switch ($release->maturity)
{
	case 'stable':
		$maturityClass = 'label-success';
		break;

	case 'rc':
		$maturityClass = 'label-info';
		break;

	case 'beta':
		$maturityClass = 'label-warning';
		break;

	case 'alpha':
		$maturityClass = 'label-important';
		break;

	default:
		$maturityClass = 'label-inverse';
		break;
}

?>

<div class="ars-category-{{{ $item->id }}} ars-category-{{ $item->is_supported ? 'supported' : 'unsupported' }}">
	<h2{{ $item->type == 'bleedingedge' ? ' class="warning"' : '' }}>
		@unless($view == 'latest')
			<span class="label {{{ $maturityClass }}} pull-right">
				@lang('COM_ARS_RELEASES_MATURITY_' . $release->maturity)
			</span>
		@endunless

		Joomla! {{{ $release->version }}}
	</h2>

	<dl class="dl-horizontal ars-release-properties">
		<dt>
			@lang('LBL_RELEASES_RELEASEDON')
		</dt>
		<dd>
			@jhtml('date', $released, JText::_('DATE_FORMAT_LC2'))
		</dd>

		@unless(empty($release->announcement_url))
			<dt>
				@lang('ARS_RELEASE_ANNOUNCEMENT')
			</dt>
			<dd>
				<a href="{{ htmlentities($release->announcement_url) }}">{{{ $release->announcement_url }}}</a>
			</dd>
		@endunless
	</dl>

	<table class="table table-striped">
		@foreach($release->items->sortBy($this->params->get('items_orderby', 'ordering'))->filter(function ($item)
		{
			if (strpos($item->title, 'Full Package') !== false)
			{
				return \Akeeba\ReleaseSystem\Site\Helper\Filter::filterItem($item, true);
			}
		}) as $i)
			@include('site:com_ars/Latest/item', ['item' => $i, 'Itemid' => $this->Itemid])
		@endforeach
	</table>

	<p class="readmore">
		<a class="btn btn-primary" href="{{ htmlentities($release_url) }}">
			<i class="icon-download"></i>&nbsp;@lang('ARS_VIEW_LATEST_LBL_RELEASE_VIEWALLITEMS')
		</a>
	</p>
</div>
