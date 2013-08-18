<div class="row-fluid">
	<div class="span10 offset1 well">
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'invoice-items-form',
			'type'=>'inline',
			'enableAjaxValidation'=>false,
		)); ?>
			
			<?php echo $form->dropDownListRow($item,'iid', CHtml::listData(Items::model()->findAll(),'iid','item_name'),array('class'=>'span4'));?>
		
			<?php echo $form->textFieldRow($item,'quantity',array('class'=>'span3')); ?>
		
			<?php echo $form->textFieldRow($item,'rate',array('class'=>'span3')); ?>

			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				'type'=>'primary',
				'label'=>$item->isNewRecord ? 'Add Item' : 'Save',
			)); ?>
		
		<?php $this->endWidget(); ?>
	
		<fieldset><legend>Invoice</legend></fieldset>
		<div style="text-align: center;">
			<h3><?php echo $customer->company->company_name; ?></h3>
			<p><?php echo $customer->company->address; ?></p>
		</div>
		<div class="row-fluid">
			<div class="span4 offset8">
				<p><?php echo "TIN: ".$customer->company->tin; ?></p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span4 ">
				<p><?php echo "Customer Name: ".$customer->customer_name; ?></p>
				<p><?php echo "Address: ".$customer->address; ?></p>
			</div>
			<div class="span4 offset4">
				<p><?php echo "Invoice Number: ".$model->invoice_id; ?></p>
				<p><?php echo "Customer TIN: ".$customer->company->tin; ?></p>
				<p><?php echo "PO Number: ".$customer->po_number; ?></p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span4 ">
				<p><?php echo "Site Address: ".$customer->site_address; ?></p>
			</div>
			<div class="span4 offset4">
				<p><?php echo "Pump: ".$model->pump; ?></p>
				<p><?php echo "Esugam Number: ".$model->esugam; ?></p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span4 ">
				<p><?php echo "CST No: ".$model->cst; ?></p>
				<p><?php echo "ECC No Reg No: ".$model->ecc; ?></p>
				<p><?php echo "Tarrif Heading No: ".$model->tariff; ?></p>
				<p><?php echo "Excisable Commoditiy: ".$model->commodity; ?></p>
			</div>
		</div>	
		<?php 
		$this->widget('bootstrap.widgets.TbGridView', array(
		    'type'=>'striped bordered condensed',
		    'dataProvider'=>$dataProvider,
		    'template'=>"{items}\n{pager}",
		    'columns'=>array(
		    	array('value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)', 'header'=>'S.No'),
		        array('name'=>'item.item_name', 'header'=>'Item Name'),
		        array('name'=>'quantity', 'header'=>'Qty'),
		        array('name'=>'rate', 'header'=>'Unit Cost'),
		        array('value'=>'$data->rate * $data->quantity', 'header'=>'Amount(Rs)'),
		    ),
		)); ?>	
		<div class="row-fluid">
			<div class="span4 ">
				<p><?php echo "Cumulative Quantity: ".$CQty; ?></p>
			</div>
			<div class="span4 offset4">
				<p><?php echo "Gross Amount: ".$GAmount; ?></p>
				<p><?php echo "VAT %: ".$model->v->vat_percentage; ?></p>
				<p><?php echo "Total Invoice Amount: ".(($GAmount*$model->v->vat_percentage)/100); ?></p>
			</div>
		</div>
	</div>
</div>