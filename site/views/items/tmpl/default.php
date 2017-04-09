<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

// load tooltip behavior
JHtml::_('behavior.tooltip');
?>

<table class="table table-striped" id="emailList">
    <thead><?php echo $this->loadTemplate('head');?></thead>
    <tbody><?php echo $this->loadTemplate('body');?></tbody>
</table>