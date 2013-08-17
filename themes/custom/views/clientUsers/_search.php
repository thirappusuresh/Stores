<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'cid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'uid',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'login_id',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'date_created',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
