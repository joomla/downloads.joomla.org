<?php
/**
 * @package   AkeebaReleaseSystem
 * @copyright Copyright (c)2010-2018 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

use Akeeba\ReleaseSystem\Admin\Helper\Select;

/** @var \Akeeba\ReleaseSystem\Admin\View\DownloadIDLabels\Html $this */

defined('_JEXEC') or die;

/** @var \Akeeba\ReleaseSystem\Admin\Model\DownloadIDLabels $item */
$item = $this->getItem();

$userField = new \Joomla\CMS\Form\Field\UserField();
$userField->id = 'user_id';
$userField->name = 'user_id';
$userField->value = $item->user_id;
?>
<section class="akeeba-panel">
    <form action="index.php" method="post" name="adminForm" id="adminForm" class="akeeba-form--horizontal">
        <div class="akeeba-container--50-50">
            <div>
                <div class="akeeba-form-group">
                    <label for="label">
                        <?php echo JText::_('COM_ARS_DLIDLABELS_FIELD_LABEL'); ?>
                    </label>

                    <input type="text" name="label" id="label" value="<?php echo $this->escape($item->label); ?>" />
                </div>

                <div class="akeeba-form-group">
                    <label for="label">
                        <?php echo JText::_('COM_ARS_DLIDLABELS_FIELD_USER_ID'); ?>
                    </label>

                    <?php echo $userField->input; ?>
                </div>

                <div class="akeeba-form-group">
                    <label for="title">
						<?php echo JText::_('JPUBLISHED'); ?>
                    </label>

					<?php echo JHtml::_('FEFHelper.select.booleanswitch', 'enabled', $item->enabled);?>
                </div>
            </div>
        </div>

        <div class="akeeba-hidden-fields-container">
            <input type="hidden" name="option" value="com_ars" />
            <input type="hidden" name="view" value="DownloadIDLabels" />
            <input type="hidden" name="task" value="" />
            <input type="hidden" name="ars_dlidlabel_id" id="ars_dlidlabel_id" value="<?php echo (int)$item->ars_dlidlabel_id; ?>" />
            <input type="hidden" name="<?php echo $this->container->platform->getToken(true); ?>" value="1" />
        </div>
    </form>
</section>