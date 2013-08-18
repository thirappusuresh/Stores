<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'invoice-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal'
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'customer_id', CHtml::listData(ClientCustomers::model()->findAll(),'customer_id','customer_name'),array('class'=>'span8'));?>
	
	<?php echo $form->textFieldRow($model,'pump',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'esugam',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'cst',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'ecc',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'tariff',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'commodity',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->dropDownListRow($model,'vat', CHtml::listData(Vat::model()->findAll(),'vid','vat_name'),array('class'=>'span8'));?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Generate Invoice' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
