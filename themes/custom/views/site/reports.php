<div class="row-fluid">
	<div class="span6 well offset3">
		<?php $this->widget('bootstrap.widgets.TbAlert', array(
		        'block'=>true, // display a larger alert block?
		        'fade'=>true, // use transitions?
		        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
		        'alerts'=>array( // configurations per alert type
		            'info'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
		        ),
		    ));
		?>
		<?php /** @var BootActiveForm $form */
		$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		    'id'=>'login-form',
		    'type'=>'horizontal',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
					'validateOnSubmit'=>true)
		)); ?>
		 
		<fieldset>
			<legend>Reports</legend>
		</fieldset>		
		<?php echo $form->dropDownListRow($model,'type', array(
								  'Store In' => 'Store In',
								  'Store Out' => 'Store Out', 
								  'Invoice' => 'Invoice',
								  'Delivery Challan' => 'Delivery Challan' 
								  ), array('class'=>'span8','maxlength'=>222)); ?>
								  
		<div class="control-group">
			<?php echo $form->labelEx($model,'fromDate', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php
				$this->widget('zii.widgets.jui.CJuiDatePicker',
					array(
							// you must specify name or model/attribute
							'model'=>$model,
							'attribute'=>'fromDate',
							// optional: what's the initial value/date?
							'value' => $model->fromDate,
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
		
		<div class="control-group">
			<?php echo $form->labelEx($model,'thruDate', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php
				$this->widget('zii.widgets.jui.CJuiDatePicker',
					array(
							// you must specify name or model/attribute
							'model'=>$model,
							'attribute'=>'thruDate',
							// optional: what's the initial value/date?
							'value' => $model->thruDate,
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
		
		<div class="form-actions">
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				'type'=>'warning',
				'label'=>'Submit',
			)); ?>	
		</div>
		
		<?php $this->endWidget(); ?>	
	</div>
</div>	