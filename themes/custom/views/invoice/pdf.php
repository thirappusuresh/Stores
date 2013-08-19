<?php ini_set('memory_limit', '512M'); ?>
<table cols="7" border="0" cellspacing="0">
	<colgroup width="81"></colgroup>
	<colgroup width="148"></colgroup>
	<colgroup width="185"></colgroup>
	<colgroup width="128"></colgroup>
	<colgroup width="139"></colgroup>
	<colgroup width="237"></colgroup>
	<colgroup width="128"></colgroup>
	<tbody><tr>
		<td align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000">Invoice</font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td colspan="3" rowspan="2" align="CENTER" valign="BOTTOM"><font color="#000000"><?php echo $customer->company->company_name; ?><BR><?php echo $customer->company->address; ?></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">TIN : <?php echo $customer->company->tin; ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" colspan="2" align="LEFT" valign="BOTTOM"><font color="#000000">Customer Name &amp; Address</font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Invoice Number</font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->invoice_id; ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Date</font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo date('F j, Y',$model->date_created);?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" colspan="2" rowspan="3" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $customer->customer_name.', '.$customer->address; ?></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Customer TIN</font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $customer->company->tin; ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">PO Number</font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $customer->po_number; ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Site Address</font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Pump</font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->pump; ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $customer->site_address; ?></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Esugam Number</font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->esugam; ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">CST No :</font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->cst; ?></font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">ECC No Reg No :</font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->ecc; ?></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Tarrif Heading NO:</font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->tariff; ?></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Excisable Commoditiy:</font></td>
		<td align="LEFT" valign="BOTTOM"><b><font color="#000000"><?php echo $model->commodity; ?></font></b></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Sl no</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Item</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Qty in Cu.Mtrs</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Rate per Cu.mtrs (Rs)</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Amount(Rs)</font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
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
			<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="1" sdnum="1033;" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $count; ?></font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $record->item->item_name; ?></font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="2" sdnum="1033;" align="CENTER" valign="BOTTOM"><font color="#000000"><?php echo $record->quantity; ?></font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="200" sdnum="1033;" align="CENTER" valign="BOTTOM"><font color="#000000"><?php echo $record->rate; ?></font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="400" sdnum="1033;" align="CENTER" valign="BOTTOM"><font color="#000000"><?php echo $record->rate * $record->quantity; ?></font></td>
			<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		</tr>
	<?php } ?>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Cumulative Qty</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $CQty; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Gross Amount</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="1360" sdnum="1033;" align="CENTER" valign="BOTTOM"><font color="#000000"><?php echo $GAmount; ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="CENTER" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" colspan="2" align="LEFT" valign="BOTTOM"><font color="#000000">Date and time Of issue of invoice</font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo date('Y-m-d H:i:s', time());?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="CENTER" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan="2" align="LEFT" valign="BOTTOM"><font color="#000000">Date and time Of Removal of Goods:</font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Total Duty:</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="CENTER" valign="BOTTOM"><font color="#000000">***</font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="CENTER" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Total Duty In words :</font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">*****</font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Total Accesible Value</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="1360" sdnum="1033;" align="CENTER" valign="BOTTOM"><font color="#000000"><?php echo $GAmount; ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" colspan="2" align="LEFT" valign="BOTTOM"><font color="#000000">Total Invoice Amount In Words :</font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">VAT %</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->v->vat_percentage; ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="CENTER" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Total Invoice Amount</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $GAmount+(($GAmount*$model->v->vat_percentage)/100); ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Reciver name and Signature</font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="2" align="LEFT" valign="BOTTOM"><font color="#000000">FOR "<?php echo $customer->company->company_name; ?>"</font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="2" align="LEFT" valign="BOTTOM"><font color="#000000">(Authorisedd Signatory)</font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
</tbody></table>