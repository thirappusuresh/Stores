<?php ini_set('memory_limit', '512M'); ?>
<style>
	th {
		text-align: left;
	}
</style>
<div class="row-fluid">
	<div class="span10 offset1 well">
		<div style="text-align: center;">
			<h3><?php echo $customer->company->company_name; ?></h3>
			<p><?php echo $customer->company->address; ?></p>
		</div>
		<div class="row-fluid">
			<div class="span12 ">
			<table width="100%">
			<tr>
				<td width="50%">
				<table>
					<tr><td>Customer Name: </td><td><?php echo $customer->customer_name; ?></td></tr>
					<tr><td>Address: </td><td><?php echo $customer->address; ?></td></tr>
					<tr><td>Site Address: </td><td><?php echo $customer->site_address; ?></td></tr>
					<tr><td>CST No: </td><td><?php echo $model->cst; ?></td></tr>
					<tr><td>ECC No Reg No: </td><td><?php echo $model->ecc; ?></td></tr>
					<tr><td>Tarrif Heading No: </td><td><?php echo $model->tariff; ?></td></tr>
					<tr><td>Excisable Commoditiy: </td><td><?php echo $model->commodity; ?></td></tr>
				</table>
				</td>
				<td width="50%">
				<table>
					<tr><td>TIN: </td><td><?php echo $customer->company->tin; ?></td></tr>
					<tr><td>Invoice Number: </td><td><?php echo $model->invoice_id; ?></td></tr>
					<tr><td>Customer TIN: </td><td><?php echo $customer->company->tin; ?></td></tr>
					<tr><td>PO Number: </td><td><?php echo $customer->po_number; ?></td></tr>
					<tr><td>Pump: </td><td><?php echo $model->pump; ?></td></tr>
					<tr><td>Esugam Number: </td><td><?php echo $model->esugam; ?></td></tr>
				</table>
				</td>
			</tr>
			</table>
			</div>
		</div>

		<table width="100%">
			<tr>
				<th>S No</th>
				<th>Item Name</th>
				<th>Qty</th>
				<th>Unit Cost</th>
				<th>Amount(Rs)</th>
			</tr>
			<?php 
			$CQty = 0;
			$GAmount = 0;
			$count = 0;
			foreach($dataProvider->getData() as $record) {
			    $count++;
			    $GAmount = $GAmount + ($record->rate * $record->quantity);
			    $CQty = $CQty + $record->quantity; ?>
				<tr>
					<td><?php echo $count; ?></td>
					<td><?php echo $record->item->item_name; ?></td>
					<td><?php echo $record->quantity; ?></td>
					<td><?php echo $record->rate; ?></td>
					<td><?php echo $record->rate * $record->quantity; ?></td>
				</tr>
			<?php } ?>

		</table>
		<div class="row-fluid">
			<div class="span12 ">
			<table width="100%">
			<tr>
				<td width="50%">
				<table>
					<tr><td>Cumulative Quantity: </td><td><?php echo $CQty; ?></td></tr>
				</table>
				</td>
				<td width="50%">
				<table>
					<tr><td>Gross Amount: </td><td><?php echo $GAmount; ?></td></tr>
					<tr><td>VAT %: </td><td><?php echo $model->v->vat_percentage; ?></td></tr>
					<tr><td>Total Invoice Amount: </td><td><?php echo (($GAmount*$model->v->vat_percentage)/100); ?></td></tr>
				</table>
				</td>
			</tr>
			</table>
			</div>
		</div>
	</div>
</div>