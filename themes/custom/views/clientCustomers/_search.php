<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'cid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'customer_id',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'customer_name',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textAreaRow($model,'address',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'site_address',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'tin',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'po_number',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'date_created',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created_by',array('class'=>'span5','maxlength'=>222)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
