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
		        array('name'=>'invoice_id', 'header'=>'Invoice No'),
		        array('name'=>'customer.customer_name', 'header'=>'Customer Name'),
		        array(
		            'class'=>'bootstrap.widgets.TbButtonColumn',
		            'header'=>'update',
		        	'template'=>'{update}/{print}',
		        	'buttons'=>array(
		        		'update'=>
		        			array(
		        				'url'=>'Yii::app()->createUrl("/invoice/view", array("id"=>$data->invoice_id))',
		        			),
		        		'print'=>
		        			array(
		        				'url'=>'Yii::app()->createUrl("/invoice/generatePdf", array("id"=>$data->invoice_id))',
		        			),
		        	),
		            'htmlOptions'=>array(),
		        ),
		    ),
		)); ?>		
	</div>
</div>