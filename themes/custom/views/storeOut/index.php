<div class="row-fluid">
	<div class="span5 well">
		<fieldset><legend>Store Out</legend></fieldset>
		<?php $this->widget('bootstrap.widgets.TbAlert', array(
	        'block'=>true, // display a larger alert block?
	        'fade'=>true, // use transitions?
	        'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
	        'alerts'=>array( // configurations per alert type
	            'info'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
	        ),
	    ));
		?>
		
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'store-in-form',
			'enableAjaxValidation'=>false,
			'type'=>'horizontal'
		)); ?>
		
			<?php echo $form->dropDownListRow($model,'iid', CHtml::listData(Items::model()->findAll(),'iid','item_name'),array('class'=>'span11 item'));?>
			<div class="control-group" id="loading" style="display:none;">
				<div class="controls">
					<img src="<?php echo Yii::app()->params['location']; ?>loading.gif" />
				</div>
			</div>
			
			<div class="control-group" id="uom" style="display:none;">
				<div class="controls uom">
				</div>
			</div>
			
			<?php echo $form->textFieldRow($model,'quantity',array('class'=>'span11 qty')); ?>
	
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
										'class'=>'span11'
								)
						)
					); ?>
				</div>
			</div>
			<?php echo $form->textFieldRow($model,'vehicle',array('class'=>'span11','maxlength'=>222)); ?>
		
			<?php echo $form->textAreaRow($model,'issued_to',array('rows'=>3, 'cols'=>50, 'class'=>'span11')); ?>
		
			<?php echo $form->textFieldRow($model,'rate',array('class'=>'span11')); ?>
		
			<div class="form-actions">
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>$model->isNewRecord ? 'Create' : 'Save',
				)); ?>
			</div>
		
		<?php $this->endWidget(); ?>
		
	</div>
	
	<div class="span7">
		<?php 
		$this->widget('bootstrap.widgets.TbGridView', array(
		    'type'=>'striped bordered condensed',
		    'dataProvider'=>$dataProvider,
		    'template'=>"{items}\n{pager}",
		    'columns'=>array(
		    	array('value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)', 'header'=>'S.No'),
		        array('name'=>'item.item_name', 'header'=>'Item Name'),
		        array('name'=>'item.uom', 'header'=>'UOM'),
		        array('name'=>'date', 'header'=>'Date'),
		        array('name'=>'issued_to', 'header'=>'Received From'),
		        array('name'=>'quantity', 'header'=>'Qty'),
		        array('name'=>'rate', 'header'=>'Unit Cost'),
		        array('value'=>'$data->rate * $data->quantity', 'header'=>'Total Cost'),
		    ),
		)); ?>		
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
		$('.item').live('change', function() {
		  $.ajax({
		  	type: 'GET',
		  	dataType: 'json',
		  	url: "/storeOut/getFields/id/"+$(this).val(),
		  	beforeSend: function(){
		  		$("#uom").hide();
		  		$("#loading").show();
		    },
		  	success: function(result) {
		  		$("#loading").hide();
		  		$("#uom").show();
		  		$(".uom").html("<p class=\"help-block\">UOM: "+result.uom+"</p>");
		  		$(".qty").val(result.qty);
		  	}
		  })	
		});
	});
</script>
