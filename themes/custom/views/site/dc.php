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
		        array('name'=>'docket_no', 'header'=>'Docket No'),
		        array('name'=>'job_no', 'header'=>'Job No'),
		        array('name'=>'date', 'header'=>'Date Created'),
		        array('name'=>'client_name', 'header'=>'Client Name'),
		        array('name'=>'site_name', 'header'=>'Site Name'),
		        array('name'=>'address', 'header'=>'Address'),
		        array(
		            'class'=>'bootstrap.widgets.TbButtonColumn',
		            'header'=>'update',
		        	'template'=>'{update}/{print}',
		        	'buttons'=>array(
		        		'update'=>
		        			array(
		        				'url'=>'Yii::app()->createUrl("/dc/view", array("id"=>$data->docket_no))',
		        			),
		        		'print'=>
		        			array(
		        				'url'=>'Yii::app()->createUrl("/dc/generatePdf", array("id"=>$data->docket_no))',
		        			),
		        	),
		            'htmlOptions'=>array(),
		        ),
		    ),
		)); ?>		
	</div>
</div>