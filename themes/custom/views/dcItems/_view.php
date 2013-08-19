<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->product_code),array('view','id'=>$data->product_code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('docket_no')); ?>:</b>
	<?php echo CHtml::encode($data->docket_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('design')); ?>:</b>
	<?php echo CHtml::encode($data->design); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('required_qty')); ?>:</b>
	<?php echo CHtml::encode($data->required_qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('batched_qty')); ?>:</b>
	<?php echo CHtml::encode($data->batched_qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moisture')); ?>:</b>
	<?php echo CHtml::encode($data->moisture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	*/ ?>

</div>