<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'docket_no',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'driver',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'date',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'vehicle_no',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'job_no',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'client_name',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'site_name',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textAreaRow($model,'address',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'a_no',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'order_no',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'mix_des',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'mix_title',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'ordered_qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'dispatched_qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cumulative_qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'this_load',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'concrete_grade',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'slump',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'aggregate',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'admixture',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'cement',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'special_requirement',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'pump_type',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'pump_name',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'pumped_qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pump_time',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'date_created',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created_by',array('class'=>'span5','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'cid',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
