<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
    <tr class="row<?php echo $i % 2; ?>">
        <td class="text-center">
		    <?php echo $item->user_name ? $item->user_name : $item->name ; ?>
        </td>
        <td class="text-center">
		    <?php echo $item->email; ?>
        </td>
    </tr>
<?php endforeach; ?>