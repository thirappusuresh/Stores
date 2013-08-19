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
	
		<fieldset><legend>Invoice<a class="pull-right btn btn-small btn-primary" href="/invoice/generatePdf/id/<?php echo $model->invoice_id;?>">Generate Pdf</a></legend></fieldset>
		<div style="text-align: center;">
			<h3><?php echo $customer->company->company_name; ?></h3>
			<p><?php echo $customer->company->address; ?></p>
		</div>
		<div class="row-fluid">
			<div class="span4 ">
				<table>
					<tr><td>Customer Name: </td><td><?php echo $customer->customer_name; ?></td></tr>
					<tr><td>Address: </td><td><?php echo $customer->address; ?></td></tr>
					<tr><td>Site Address: </td><td><?php echo $customer->site_address; ?></td></tr>
					<tr><td>CST No: </td><td><?php echo $model->cst; ?></td></tr>
					<tr><td>ECC No Reg No: </td><td><?php echo $model->ecc; ?></td></tr>
					<tr><td>Tarrif Heading No: </td><td><?php echo $model->tariff; ?></td></tr>
					<tr><td>Excisable Commoditiy: </td><td><?php echo $model->commodity; ?></td></tr>
					
				</table>
			</div>		
			<div class="span4 offset4">
				<table>
					<tr><td>TIN: </td><td><?php echo $customer->company->tin; ?></td></tr>
					<tr><td>Invoice Number: </td><td><?php echo $model->invoice_id; ?></td></tr>
					<tr><td>Customer TIN: </td><td><?php echo $customer->company->tin; ?></td></tr>
					<tr><td>PO Number: </td><td><?php echo $customer->po_number; ?></td></tr>
					<tr><td>Pump: </td><td><?php echo $model->pump; ?></td></tr>
					<tr><td>Esugam Number: </td><td><?php echo $model->esugam; ?></td></tr>
				</table>
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
				<table>
					<tr><td>Cumulative Quantity: </td><td><?php echo $CQty; ?></td></tr>
				</table>
			</div>
			<div class="span4 offset4">
				<table>
					<tr><td>Gross Amount: </td><td><?php echo $GAmount; ?></td></tr>
					<tr><td>VAT %: </td><td><?php echo $model->v->vat_percentage; ?></td></tr>
					<tr><td>Total Invoice Amount: </td><td><?php echo $GAmount+(($GAmount*$model->v->vat_percentage)/100); ?></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>