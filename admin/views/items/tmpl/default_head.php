<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<tr>
	<th style="width:1%" class="nowrap text-center hidden-sm-down">
	    <?php echo JHtml::_('grid.checkall'); ?>
	</th>
    <th style="width:1%; min-width: 85px;" class="nowrap text-center hidden-sm-down">
	    <?php echo JText::_('JSTATUS'); ?>
    </th>
	<th style="width:10%" class="nowrap text-center hidden-sm-down">
		<?php echo JText::_('COM_PROVE_NAME_COLUMN'); ?>
	</th>
    <th style="width:10%" class="nowrap text-center hidden-sm-down">
	    <?php echo JText::_('COM_PROVE_USER_COLUMN'); ?>
    </th>
	<th style="width:10%" class="nowrap text-center hidden-sm-down">
		<?php echo JText::_('COM_PROVE_EMAIL_COLUMN'); ?>
	</th>
    <th style="width:5%" class="nowrap text-center hidden-sm-down">
		<?php echo JText::_('COM_PROVE_ID_COLUMN'); ?>
	</th>
</tr>