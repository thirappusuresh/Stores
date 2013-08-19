<div class="row-fluid">	
	<div class="span8 offset2">
		<fieldset>
			<legend>
				<?php echo $model->type." Activity From: ".$model->fromDate." To: ".$model->thruDate; ?>
				<a href="/site/reports" class="btn btn-small btn-primary">Back</a>
			</legend>
		</fieldset>
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
		        array('name'=>'received_from', 'header'=>'Received From'),
		        array('name'=>'quantity', 'header'=>'Qty'),
		        array('name'=>'rate', 'header'=>'Unit Cost'),
		        array('value'=>'$data->rate * $data->quantity', 'header'=>'Total Cost'),
		    ),
		)); ?>		
	</div>
</div>