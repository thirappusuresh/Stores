<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'store-out-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'iid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'quantity',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'vehicle',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textAreaRow($model,'issued_to',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'rate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_created',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created_by',array('class'=>'span5','maxlength'=>222)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
