<div class="row-fluid">
	<div class="span5 well">
		<fieldset><legend>Customers</legend></fieldset>
		<?php
		$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array (
			'id' => 'client-customers-form',
			'enableAjaxValidation' => false,
			'type'=>'horizontal'
		));
		?>

			<?php echo $form->textFieldRow($model,'customer_name',array('class'=>'span11','maxlength'=>222)); ?>
		
			<?php echo $form->textAreaRow($model,'address',array('rows'=>3, 'cols'=>50, 'class'=>'span11')); ?>
		
			<?php echo $form->textFieldRow($model,'site_address',array('class'=>'span11','maxlength'=>222)); ?>
		
			<?php echo $form->textFieldRow($model,'tin',array('class'=>'span11','maxlength'=>222)); ?>
		
			<?php echo $form->textFieldRow($model,'po_number',array('class'=>'span11','maxlength'=>222)); ?>
		
			<div class="form-actions">
				<?php
		
				$this->widget('bootstrap.widgets.TbButton', array (
					'buttonType' => 'submit',
					'type' => 'primary',
					'label' => $model->isNewRecord ? 'Create' : 'Save',
					
				));
				?>
			</div>

		<?php $this->endWidget(); ?>

		
	</div>
	
	<div class="span7">
		<?php

$this->widget('bootstrap.widgets.TbGridView', array (
	'type' => 'striped bordered condensed',
	'dataProvider' => $dataProvider,
	'template' => "{items}\n{pager}",
	'columns' => array (
		array (
			'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
			'header' => 'S.No'
		),
		array (
			'name' => 'customer_name',
			'header' => 'Customer Name'
		),
		array (
			'name' => 'tin',
			'header' => 'TIN'
		),
		array (
			'name' => 'po_number',
			'header' => 'PO NUMBER'
		),
		array (
			'name' => 'address',
			'header' => 'Address'
		),
		array (
			'name' => 'site_address',
			'header' => 'Site Address'
		),
	),
	
));
?>		
	</div>
</div>