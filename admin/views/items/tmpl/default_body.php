<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item):
	$link = JRoute::_('index.php?option=com_prove&task=item.edit&id=' . $item->id);
?>
    <tr class="row<?php echo $i % 2; ?>" data-dragable-group="<?php echo $item->id; ?>">
        <td class="order nowrap text-center hidden-sm-down">
		    <?php echo JHtml::_('grid.id', $i, $item->id); ?>
        </td>
        <td class="text-center">
            <div class="btn-group">
		        <?php echo JHtml::_('jgrid.published', $item->published, $i, 'items.'); ?>
            </div>
        </td>
        <td class="text-center">
		    <?php echo $item->name; ?>
        </td>
        <td class="text-center">
	        <?php echo $item->user_name ? $item->user_name : $item->name; ?>
        </td>
        <td class="text-center">
            <a href="<?php echo $link ?>"><?php echo $item->email; ?></a>
        </td>
        <td class="text-center">
		    <?php echo $item->id; ?>
        </td>
    </tr>
<?php endforeach; ?>