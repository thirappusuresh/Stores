<?php ini_set('memory_limit', '512M'); ?>
<table cols="8" border="0" cellspacing="0">
	<colgroup span="4" width="128"></colgroup>
	<colgroup width="184"></colgroup>
	<colgroup width="138"></colgroup>
	<colgroup span="2" width="128"></colgroup>
	<tbody><tr>
		<td align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td colspan="4" align="CENTER" valign="BOTTOM"><b><font color="#000000">DELIVERY CHALLAN</font></b></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td colspan="2" rowspan="2" align="CENTER" valign="BOTTOM"><b><font color="#000000"><?php echo $model->c->company_name;?></font></b></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td colspan="2" align="CENTER" valign="BOTTOM"><b><font color="#000000"><?php echo $model->c->address;?></font></b></td>
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
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Driver name:</font></b></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->driver; ?></font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Date</font></b></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->date; ?></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Docket number :</font></b></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->docket_no; ?></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><b><font color="#000000">Vehicle No. :</font></b></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->vehicle_no; ?></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Job No.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->job_no; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Client Name</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->client_name; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Site Name</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->site_name; ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">A/C No.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->a_no; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Address</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->address; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Address</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->address; ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Order No.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->order_no; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Mix Description</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Mix Title</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Ordered Quantity</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Dispatch Quantity</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Cumulative Quantity</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">This Load</font></b></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->mix_des; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->mix_title; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->ordered_qty; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->dispatched_qty; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->cumulative_qty; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->this_load; ?></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Grade Of Concrete</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->concrete_grade; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Stump</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->slump; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Aggregate</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->aggregate; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Admixture</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->admixture; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Cement</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->cement; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Special Requirement</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->special_requirement; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Pump Type</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Name Of Pump</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="2" align="LEFT" valign="BOTTOM"><b><font color="#000000">Total Quantity Pumped</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Time at Pump</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->pump_type; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->pump_name; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->pumped_qty; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $model->pump_time; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="3" rowspan="17" align="LEFT" valign="BOTTOM"><font color="#000000">Please Note:<br>1. This Concrete delivery is subject to the terms and condition<br>of sales'as shown in our quotation,<br>2. The time allowed for unloading this vehicle is ten minutes plus five<br>minutes per cubic meter or part thereof of this this load. We reserve<br>the right to charge for any detention in excess of this time.<br>3. We are not responsible for the slump, the stength or quality<br>of the concrete when water and/or any other materials have been<br>on site by or at the site or at the request of the Customer,<br>4. Any dispute that arise on quantity and quality(except comp.strength)<br>of concrete supplied in this load shall be reported to us in writing within 24 hours from the time of supply.</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Time Of Arrival at Site</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Time discharged Completed</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Time Released from site</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Water added at Site</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Admixture add at Site</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="3" rowspan="12" align="LEFT" valign="BOTTOM"><font color="#000000">I Here by Confirm that:<br><br>1. I/We have accepted delivery of concrete as per the details mentioned above<br>2. I/We have authorised the addition of any water and/or admixture as mentioned above<br><br><br>Authorised Signatory of Customer<br><br><br> ............................................................</font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="5" rowspan="4" align="LEFT" valign="BOTTOM"><font color="#000000">Cement
 and concrete contain lime and other chemicals which can cause 
irritation, Dermatitis and burning. To avoid harm to skin minimize 
contact with wet concrete and wear suitable protective clothing. 
Whenever Contact occurs (weather directly or through saturated clothing)
 wash thoroughly. In case of irritation or burns, consult a doctor 
immediatly</font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" align="CENTER" valign="BOTTOM"><b><font color="#000000">Caution :</font></b></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Product Code</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Design Qty/M3</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Required Quantity</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Batched Quantity</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Moisture %</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<?php 
	$DQty = 0;
	$RQty = 0;
	$BQty = 0;
	$MQty = 0;
	foreach($dataProvider->getData() as $record) {
	    $DQty = $DQty + $record->design;
	    $RQty = $RQty + $record->required_qty;
	    $BQty = $BQty + $record->batched_qty; 
	    $MQty = $MQty + $record->moisture;?>
		<tr>
			<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $record->product_code;?></font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $record->design; ?></font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $record->required_qty; ?></font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $record->batched_qty; ?></font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $record->moisture; ?></font></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
			<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		</tr>
	<?php } ?>


	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><b><font color="#000000">Total</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $DQty;?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $RQty;?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $BQty;?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><?php echo $MQty;?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Num Batches</font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000">**</font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000">Dispatched By :</font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" colspan="2" rowspan="2" align="LEFT" valign="BOTTOM"><font color="#000000">......................................................</font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" colspan="2" align="LEFT" valign="BOTTOM"><font color="#000000">For "<?php echo $model->c->company_name; ?>"</font></td>
		<td style="border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-right: 1px solid #000000" align="LEFT" height="17" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
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
		<td style="border-top: 1px solid #000000" align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
		<td align="LEFT" valign="BOTTOM"><font color="#000000"><br></font></td>
	</tr>
</tbody></table>