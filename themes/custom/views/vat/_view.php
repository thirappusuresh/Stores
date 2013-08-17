<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('vid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->vid),array('view','id'=>$data->vid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vat_name')); ?>:</b>
	<?php echo CHtml::encode($data->vat_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vat_percentage')); ?>:</b>
	<?php echo CHtml::encode($data->vat_percentage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />


</div>