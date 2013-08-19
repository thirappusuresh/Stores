<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'dc-items-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->textFieldRow($model,'docket_no',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'product_code',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'design',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'required_qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'batched_qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'moisture',array('class'=>'span5')); ?>

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
