<?php
/**
 *  @package  	AkeebaReleaseSystem
 *  @copyright Copyright (c)2010-2018 Nicholas K. Dionysopoulos / Akeeba Ltd
 *  @license   	GNU General Public License version 3, or later
 */

use Akeeba\ReleaseSystem\Admin\Helper\Html;
use Akeeba\ReleaseSystem\Admin\Helper\Select;
use FOF30\Utils\FEFHelper\Html as FEFHtml;

/** @var $this \Akeeba\ReleaseSystem\Admin\View\Categories\Html */

defined('_JEXEC') or die;

$js = FEFHtml::jsOrderingBackend($this->lists->order);
$this->getContainer()->template->addJSInline($js);

?>
<form action="index.php" method="post" name="adminForm" id="adminForm" class="akeeba-form">

	<section class="akeeba-panel--33-66 akeeba-filter-bar-container">
		<div class="akeeba-filter-bar akeeba-filter-bar--left akeeba-form-section akeeba-form--inline">
			<div class="akeeba-filter-element akeeba-form-group">
				<input type="text" name="title" placeholder="<?php echo \JText::_('LBL_VGROUPS_TITLE'); ?>"
					   id="filter_title" onchange="document.adminForm.submit()"
					   value="<?php echo $this->escape($this->filters['title']); ?>"
					   title="<?php echo \JText::_('LBL_VGROUPS_TITLE'); ?>"/>
			</div>

            <div class="akeeba-filter-element akeeba-form-group">
				<?php echo Select::vgroups('vgroup', $this->filters['vgroup'], ['onchange' => 'document.adminForm.submit()'])?>
            </div>

            <div class="akeeba-filter-element akeeba-form-group">
				<?php echo Select::categoryType('type', $this->filters['type'], ['onchange' => 'document.adminForm.submit()'])?>
            </div>

            <div class="akeeba-filter-element akeeba-form-group">
				<?php echo Select::accessLevel('access', $this->filters['access'] , ['onchange' => 'document.adminForm.submit()']);?>
            </div>

			<div class="akeeba-filter-element akeeba-form-group">
				<?php echo Select::published($this->filters['published'], 'published', ['onchange' => 'document.adminForm.submit()'])?>
			</div>

            <div class="akeeba-filter-element akeeba-form-group">
				<?php echo Select::languages('language', $this->filters['language'], ['onchange' => 'document.adminForm.submit()'])?>
            </div>
		</div>

		<?php echo FEFHtml::selectOrderingBackend($this->getPagination(), $this->sortFields, $this->lists->order, $this->lists->order_Dir)?>

	</section>

	<table class="akeeba-table akeeba-table--striped" id="itemsList">
		<thead>
		<tr>
            <th width="20px">
                <a href="#" onclick="Joomla.tableOrdering('ordering','asc','');return false;" class="hasPopover" title="" data-content="Select to sort by this column" data-placement="top" data-original-title="Ordering"><i class="icon-menu-2"></i></a>
            </th>
			<th width="32">
				<input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this);"/>
			</th>
			<th>
				<?php echo \JHtml::_('grid.sort', 'COM_ARS_CATEGORIES_FIELD_TITLE', 'title', $this->lists->order_Dir, $this->lists->order, 'browse'); ?>
			</th>
            <th>
				<?php echo \JHtml::_('grid.sort', 'LBL_CATEGORIES_VGROUP', 'vg_title', $this->lists->order_Dir, $this->lists->order, 'browse'); ?>
			</th>
            <th>
				<?php echo \JHtml::_('grid.sort', 'COM_ARS_CATEGORIES_FIELD_TYPE', 'type', $this->lists->order_Dir, $this->lists->order, 'browse'); ?>
            </th>
            <th>
				<?php echo \JHtml::_('grid.sort', 'JFIELD_ACCESS_LABEL', 'access', $this->lists->order_Dir, $this->lists->order, 'browse'); ?>
            </th>
            <th width="8%">
				<?php echo \JHtml::_('grid.sort', 'JPUBLISHED', 'published', $this->lists->order_Dir, $this->lists->order, 'browse'); ?>
            </th>
            <th>
				<?php echo \JHtml::_('grid.sort', 'JFIELD_LANGUAGE_LABEL', 'language', $this->lists->order_Dir, $this->lists->order, 'browse'); ?>
            </th>
		</tr>
		</thead>
		<tfoot>
		<tr>
			<td colspan="11" class="center">
				<?php echo $this->pagination->getListFooter(); ?>
			</td>
		</tr>
		</tfoot>
		<tbody>
		<?php if (!count($this->items)):?>
			<tr>
				<td colspan="11">
					<?php echo JText::_('COM_ARS_COMMON_NOITEMS_LABEL')?>
				</td>
			</tr>
		<?php endif;?>
		<?php
		if ($this->items):
			$i = 0;
			foreach($this->items as $row):
                $type = $row->type == 'normal' ? JText::_('COM_ARS_CATEGORIES_TYPE_NORMAL') : JText::_('COM_ARS_CATEGORIES_TYPE_BLEEDINGEDGE');
				$edit = 'index.php?option=com_ars&view=Category&id='.$row->id;
				$enabled = $this->container->platform->getUser()->authorise('core.edit.state', 'com_ars')
				?>
				<tr>
                    <td>
                        <?php echo Html::ordering($this, 'ordering', $row->ordering)?>
                    </td>
					<td>
                        <?php echo \JHtml::_('grid.id', ++$i, $row->id); ?>
                    </td>
                    <td>
                        <a href="<?php echo $edit ?>">
                            <?php echo $row->title ?>
                        </a>
                    </td>
					<td>
                    <?php
                        if ($row->visualGroup)
                        {
                        ?>
                            <a href="index.php?option=com_ars&view=VisualGroup&id=<?php echo $row->visualGroup->id ?>">
                                <?php echo $row->visualGroup->title ?>
                            </a>
                        <?php
                        }
                        else
                        {
                            echo '---';
                        }
                    ?>
					</td>
                    <td>
                        <?php echo $type ?>
                    </td>
                    <td>
                        <?php echo Html::accessLevel($row->access) ?>
                    </td>
                    <td>
						<?php echo JHTML::_('jgrid.published', $row->published, $i, '', $enabled, 'cb')?>
                    </td>
                    <td>
                        <?php echo Html::language($row->language) ?>
                    </td>
				</tr>
			<?php
			endforeach;
		endif; ?>
		</tbody>

	</table>

	<div class="akeeba-hidden-fields-container">
		<input type="hidden" name="option" id="option" value="com_ars"/>
		<input type="hidden" name="view" id="view" value="Categories"/>
		<input type="hidden" name="boxchecked" id="boxchecked" value="0"/>
		<input type="hidden" name="task" id="task" value="browse"/>
		<input type="hidden" name="filter_order" id="filter_order" value="<?php echo $this->escape($this->lists->order); ?>"/>
		<input type="hidden" name="filter_order_Dir" id="filter_order_Dir" value="<?php echo $this->escape($this->lists->order_Dir); ?>"/>
		<input type="hidden" name="<?php echo $this->container->platform->getToken(true); ?>" value="1"/>
	</div>
</form>
