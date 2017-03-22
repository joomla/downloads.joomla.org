<?php
/**
 * @package   AkeebaReleaseSystem
 * @copyright Copyright (c)2010 Nicholas K. Dionysopoulos
 * @license   GNU General Public License version 3, or later
 */

defined('_JEXEC') or die;

/** @var  \Akeeba\ReleaseSystem\Site\View\Releases\Html $this */
/** @var  \Akeeba\ReleaseSystem\Site\Model\Releases $item */

use Akeeba\ReleaseSystem\Site\Helper\Filter;
use Akeeba\ReleaseSystem\Site\Helper\Router;
use Akeeba\ReleaseSystem\Admin\Helper\Format;

$released = JFactory::getDate($item->created);

$release_url = Router::_('index.php?option=com_ars&view=Items&release_id=' . $item->id . '&Itemid=' . $Itemid);

$authorisedViewLevels = $this->getContainer()->platform->getUser()->getAuthorisedViewLevels();

if (!Filter::filterItem($item, false, $authorisedViewLevels) && !empty($item->redirect_unauth))
{
	$release_url = $item->redirect_unauth;
}

switch ($item->maturity)
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

<div class="ars-release-{{{ $item->id }}} well">
	@if($item->category->visualGroup->id == 1)
		@if(!$isMenuItemView)
		<div class="page-header">
			<h2>
				Joomla! {{{ $item->version }}}
			</h2>
		</div>
		@else
			<h4>
				Joomla! {{{ $item->version }}}
			</h4>
		@endif
	@else
		<h4>
			<a href="{{ htmlentities($release_url) }}">
				@lang('COM_ARS_RELEASES_VERSION')
				{{{ $item->version }}}
			</a>
			<span class="label {{{ $maturityClass }}}">
				@lang('COM_ARS_RELEASES_MATURITY_' . $item->maturity)
			</span>
		</h4>
	@endif

	@if($item->category->visualGroup->id == 1)
		<div class="ars-item-description">
			@sprintf('ARS_CMS_RELEASE_DESCRIPTION', $item->version)
		</div>
	@else
		@unless(empty($item->description))
			<div class="ars-item-description" dir="ltr">
				{{ Format::preProcessMessage($item->description, 'com_ars.release_description') }}
			</div>
		@endunless
	@endif

	<dl class="dl-horizontal ars-release-properties">
		@if($item->category->visualGroup->id != 1)
			<dt>
				@lang('COM_ARS_RELEASES_FIELD_MATURITY')
			</dt>
			<dd>
				@lang('COM_ARS_RELEASES_MATURITY_'.  strtoupper($item->maturity))
			</dd>
		@endif

		<dt>
			@lang('LBL_RELEASES_RELEASEDON')
		</dt>
		<dd>
			@jhtml('date', $released, JText::_('DATE_FORMAT_LC2'))
		</dd>

		@unless(empty($item->announcement_url))
			<dt>
				@lang('ARS_RELEASE_ANNOUNCEMENT')
			</dt>
			<dd>
				<a href="{{ htmlentities($item->announcement_url) }}">{{{ $item->announcement_url }}}</a>
			</dd>
		@endunless
	</dl>

	@if(!isset($no_link) || !$no_link)
		<p class="readmore">
			<a href="{{ htmlentities($release_url) }}" class="btn btn-primary">
				@lang('LBL_RELEASE_VIEWITEMS')
			</a>
		</p>
	@endif
</div>
