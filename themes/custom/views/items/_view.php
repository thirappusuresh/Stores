<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iid),array('view','id'=>$data->iid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_name')); ?>:</b>
	<?php echo CHtml::encode($data->item_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uom')); ?>:</b>
	<?php echo CHtml::encode($data->uom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_type')); ?>:</b>
	<?php echo CHtml::encode($data->item_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />


</div>