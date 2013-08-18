<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sid),array('view','id'=>$data->sid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iid')); ?>:</b>
	<?php echo CHtml::encode($data->iid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate')); ?>:</b>
	<?php echo CHtml::encode($data->rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoice_id')); ?>:</b>
	<?php echo CHtml::encode($data->invoice_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />


</div>