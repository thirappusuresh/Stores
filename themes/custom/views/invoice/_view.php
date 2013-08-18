<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoice_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->invoice_id),array('view','id'=>$data->invoice_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pump')); ?>:</b>
	<?php echo CHtml::encode($data->pump); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esugam')); ?>:</b>
	<?php echo CHtml::encode($data->esugam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cst')); ?>:</b>
	<?php echo CHtml::encode($data->cst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecc')); ?>:</b>
	<?php echo CHtml::encode($data->ecc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tariff')); ?>:</b>
	<?php echo CHtml::encode($data->tariff); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('commodity')); ?>:</b>
	<?php echo CHtml::encode($data->commodity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vat')); ?>:</b>
	<?php echo CHtml::encode($data->vat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	*/ ?>

</div>