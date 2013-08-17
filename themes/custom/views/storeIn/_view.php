<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sin_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sin_id),array('view','id'=>$data->sin_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iid')); ?>:</b>
	<?php echo CHtml::encode($data->iid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->current_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('received_from')); ?>:</b>
	<?php echo CHtml::encode($data->received_from); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('rate')); ?>:</b>
	<?php echo CHtml::encode($data->rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	*/ ?>

</div>