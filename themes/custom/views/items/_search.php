<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'iid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'item_name',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'uom',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'item_type',array('class'=>'span5','maxlength'=>222)); ?>

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
