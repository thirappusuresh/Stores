<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'dc-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->textFieldRow($model,'driver',array('class'=>'span8','maxlength'=>222)); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'date', array('class'=>'control-label')); ?>
		<div class="controls">
			<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
						// you must specify name or model/attribute
						'model'=>$model,
						'attribute'=>'date',
						// optional: what's the initial value/date?
						'value' => $model->date,
						// optional: change the language
						'language' => 'en',
		
						/* optional: change visual
						 * themeUrl: "where the themes for this widget are located?"
						* theme: theme name. Note that there must be a folder under themeUrl with the theme name
						* cssFile: specifies the css file name under the theme folder. You may specify a
						*          single filename or an array of filenames
						* try http://jqueryui.com/themeroller/
						*/
						'themeUrl' => Yii::app()->baseUrl.'/css/jui' ,
						'theme'=>'base',	//try 'bee' also to see the changes
						'cssFile'=>array('jquery-ui.css' /*,anotherfile.css, etc.css*/),
		
						//  optional: jquery Datepicker options
						'options' => array(
								// how to change the input format? see http://docs.jquery.com/UI/Datepicker/formatDate
								'dateFormat'=>'mm/dd/yy',
								// user will be able to change month and year
								'changeMonth' => 'true',
								'changeYear' => 'true',
								//'showOn'=>'button',
								//'buttonText'=>'C',
								// shows the button panel under the calendar (buttons like "today" and "done")
								//'showButtonPanel' => 'true',
		
								// this is useful to allow only valid chars in the input field, according to dateFormat
								'constrainInput' => 'false',
		
								// speed at which the datepicker appears, time in ms or "slow", "normal" or "fast"
								'duration'=>'normal',
		
								// animation effect, see http://docs.jquery.com/UI/Effects like Blind, Clip, Drop, Explode, Fade, Fold, Puff, Slide, Scale
								'showAnim' =>'scale',
						),
		
						// optional: html options will affect the input element, not the datepicker widget itself
						'htmlOptions'=>array(
								'style'=>'',
								'class'=>'span8'
						)
				)
			); ?>
		</div>
	</div>
	<?php echo $form->textFieldRow($model,'vehicle_no',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'job_no',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'client_name',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'site_name',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textAreaRow($model,'address',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'a_no',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'order_no',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'mix_des',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'mix_title',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'ordered_qty',array('class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'dispatched_qty',array('class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'cumulative_qty',array('class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'this_load',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'concrete_grade',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'slump',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'aggregate',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'admixture',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'cement',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'special_requirement',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'pump_type',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'pump_name',array('class'=>'span8','maxlength'=>222)); ?>

	<?php echo $form->textFieldRow($model,'pumped_qty',array('class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'pump_time',array('class'=>'span8','maxlength'=>222)); ?>


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
