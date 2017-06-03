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

$released = $this->container->platform->getDate($item->created);

?>

<div class="ars-release-{{{ $item->id }}} well <?php echo $item->category->is_supported ? 'supported' : 'unsupported'; ?>">
	@if($item->category->visualGroup->id == 1)
		@if(!$isMenuItemView)
		<div class="page-header">
			<h1>
				Joomla! {{{ $item->version }}}
			</h1>
		</div>
		@else
			<h4 class="text-muted">
				Joomla! {{{ $item->version }}}
			</h4>
		@endif
	@elseif($item->category->visualGroup->id == 5)
		@if(!$isMenuItemView)
		<div class="page-header">
			<h1>
				{{ $item->category->title }} {{{ $item->version }}}
			</h1>
		</div>
		@else
			<h4 class="text-muted">
				{{ $item->category->title }} {{{ $item->version }}}
			</h4>
		@endif
	@else
		<h4 class="text-muted">
			{{{ $item->category->title }}}
			{{{ $item->version }}}
			<span class="label label-default">
				@lang('COM_ARS_RELEASES_MATURITY_' . $item->maturity)
			</span>
		</h4>
	@endif

	@if($item->category->visualGroup->id == 1 && !$item->category->is_supported)
		<div class="alert alert-warning">
			<h4>@lang('ARS_HEADS_UP_TITLE')</h4>
			@lang('ARS_UNSUPPORTED_CMS_RELEASE')
		</div>
	@endif

	<dl class="dl-horizontal ars-release-properties">
		@if($item->category->visualGroup->id != 1)
			<dt>
				@lang('COM_ARS_RELEASES_FIELD_MATURITY')
			</dt>
			<dd>
				@lang('COM_ARS_RELEASES_MATURITY_' . $item->maturity)
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

		@unless(!empty($item->announcement_url))
			@if($item->category->visualGroup->id != 1 && !empty($item->notes))
			<dt>
				@lang('COM_ARS_RELEASE_NOTES_LABEL')
			</dt>
			<dd dir="ltr">
				{{ Format::preProcessMessage($item->notes, 'com_ars.release_notes') }}
			</dd>
			@endif
		@endunless
	</dl>
</div>
