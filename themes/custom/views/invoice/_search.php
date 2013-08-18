<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'invoice_id',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'customer_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pump',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'esugam',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'cst',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'ecc',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'tariff',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'commodity',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'vat',array('class'=>'span5')); ?>

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
