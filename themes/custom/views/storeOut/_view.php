<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sout_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sout_id),array('view','id'=>$data->sout_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iid')); ?>:</b>
	<?php echo CHtml::encode($data->iid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issued_to')); ?>:</b>
	<?php echo CHtml::encode($data->issued_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate')); ?>:</b>
	<?php echo CHtml::encode($data->rate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	*/ ?>

</div>