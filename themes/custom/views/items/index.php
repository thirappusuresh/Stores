<div class="row-fluid">
	<div class="span5 offset1 well">
		<fieldset><legend>Items</legend></fieldset>
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
			'id'=>'items-form',
			'enableAjaxValidation'=>false,
			'type'=>'horizontal',
		)); ?>	
		
			<?php echo $form->textFieldRow($model,'item_name',array('class'=>'span8','maxlength'=>222)); ?>
		
			<?php echo $form->textFieldRow($model,'uom',array('class'=>'span8','maxlength'=>222)); ?>
		
			<?php echo $form->dropDownListRow($model,'item_type', array(
								  'Store Item' => 'Store Item', 
								  'Invoice Item' => 'Invoice Item', 
								  ), array('class'=>'span8','maxlength'=>222)); ?>
		
			<div class="form-actions">
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>$model->isNewRecord ? 'Create' : 'Save',
				)); ?>
			</div>
		
		<?php $this->endWidget(); ?>

	</div>
	
	<div class="span5">
		<?php $this->widget('bootstrap.widgets.TbGridView', array(
		    'type'=>'striped bordered condensed',
		    'dataProvider'=>$dataProvider,
		    'template'=>"{items}\n{pager}",
		    'columns'=>array(
		        array('name'=>'item_name', 'header'=>'Attribute Name'),
		        array('name'=>'uom', 'header'=>'Data Type'),
		        array('name'=>'item_type', 'header'=>'Starts/Greater Than'),
		        array('name'=>'date_created', 'header'=>'Ends/Less Than'),
		    ),
		)); ?>
	</div>
</div>
