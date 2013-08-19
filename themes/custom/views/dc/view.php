<div class="row-fluid">
	<div class="span10 offset1 well">
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'dc-items-form',
			'type'=>'inline',
			'enableAjaxValidation'=>false,
		)); ?>
		
			<?php echo $form->textFieldRow($item,'product_code',array('class'=>'span3','maxlength'=>222)); ?>
		
			<?php echo $form->textFieldRow($item,'design',array('class'=>'span2')); ?>
		
			<?php echo $form->textFieldRow($item,'required_qty',array('class'=>'span2')); ?>
		
			<?php echo $form->textFieldRow($item,'batched_qty',array('class'=>'span2')); ?>
		
			<?php echo $form->textFieldRow($item,'moisture',array('class'=>'span2')); ?>
		
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				'type'=>'primary',
				'label'=>$item->isNewRecord ? 'Add Item' : 'Save',
			)); ?>
		
		<?php $this->endWidget(); ?>

	
		<fieldset><legend>Delivery Challan<a class="pull-right btn btn-small btn-primary" href="/dc/generatePdf/id/<?php echo $model->docket_no;?>">Generate Pdf</a></legend></fieldset>

		<?php 
		$this->widget('bootstrap.widgets.TbGridView', array(
		    'type'=>'striped bordered condensed',
		    'dataProvider'=>$dataProvider,
		    'template'=>"{items}\n{pager}",
		    'columns'=>array(
		    	array('value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)', 'header'=>'S.No'),
		        array('name'=>'product_code', 'header'=>'Product Code'),
		        array('name'=>'design', 'header'=>'Design Qty/M3'),
		        array('name'=>'required_qty', 'header'=>'Required Quantity'),
		        array('name'=>'batched_qty', 'header'=>'Batched Quantity'),
		        array('name'=>'moisture', 'header'=>'Moisture %'),
		    ),
		)); ?>	

	</div>
</div>