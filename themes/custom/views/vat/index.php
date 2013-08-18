<div class="row-fluid">
	<div class="span4 offset2 well">
		<fieldset><legend>Vat</legend></fieldset>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'vat-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>false,
		)); ?>
		
			<?php echo $form->textFieldRow($model,'vat_name',array('class'=>'span11','maxlength'=>222)); ?>
		
			<?php echo $form->textFieldRow($model,'vat_percentage',array('class'=>'span11')); ?>
		
			<div class="form-actions">
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>$model->isNewRecord ? 'Create' : 'Save',
				)); ?>
			</div>
		
		<?php $this->endWidget(); ?>

		
	</div>
	
	<div class="span4">
		<?php 
		$this->widget('bootstrap.widgets.TbGridView', array(
		    'type'=>'striped bordered condensed',
		    'dataProvider'=>$dataProvider,
		    'template'=>"{items}\n{pager}",
		    'columns'=>array(
		    	array('value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)', 'header'=>'S.No'),
		        array('name'=>'vat_name', 'header'=>'Vat Name'),
		        array('name'=>'vat_percentage', 'header'=>'Percentage'),
		    ),
		)); ?>		
	</div>
</div>