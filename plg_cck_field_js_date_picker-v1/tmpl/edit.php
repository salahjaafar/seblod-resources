<?php
/**
* @version             SEBLOD 3.x More
* @package             SEBLOD (App Builder & CCK) // SEBLOD nano (Form Builder)
* @url                 https://www.seblod.com
* @editor              Octopoos - www.octopoos.com
* @copyright           Copyright (C) 2009 - 2018 SEBLOD. All Rights Reserved.
* @license             GNU General Public License version 2 or later; see _LICENSE.php
**/

defined('_JEXEC') or die;
?>

<div class="seblod">
    <?php echo JCckDev::renderLegend(JText::_('COM_CCK_CONSTRUCTION'), JText::_('PLG_CCK_FIELD_' . $this->item->type . '_DESC')); ?>
    <ul class="adminformlist adminformlist-2cols">
        <?php
        // Render the label, default value, minimum length, maximum length, size fields
        echo JCckDev::renderForm('core_label', $this->item->label, $config);
        echo JCckDev::renderForm('core_defaultvalue', $this->item->defaultvalue, $config);
        echo JCckDev::renderForm('core_minlength', $this->item->minlength, $config);
        echo JCckDev::renderForm('core_maxlength', $this->item->maxlength, $config);
        echo JCckDev::renderForm('core_size', $this->item->size, $config);
        
        // Add Date Picker specific settings
        echo JCckDev::renderForm('core_date_format', $this->item->date_format, $config); // Example: Add a field for date format if needed
        echo JCckDev::renderForm('core_min_date', $this->item->min_date, $config); // Example: Minimum date field
        echo JCckDev::renderForm('core_max_date', $this->item->max_date, $config); // Example: Maximum date field

        // Spacer and storage settings
        echo JCckDev::renderSpacer(JText::_('COM_CCK_STORAGE'), JText::_('COM_CCK_STORAGE_DESC'));
        echo JCckDev::getForm('core_storage', $this->item->storage, $config);
        ?>
    </ul>
</div>
