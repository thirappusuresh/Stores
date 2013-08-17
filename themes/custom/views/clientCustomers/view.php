<?php
$this->breadcrumbs=array(
	'Client Customers'=>array('index'),
	$model->customer_id,
);

$this->menu=array(
	array('label'=>'List ClientCustomers','url'=>array('index')),
	array('label'=>'Create ClientCustomers','url'=>array('create')),
	array('label'=>'Update ClientCustomers','url'=>array('update','id'=>$model->customer_id)),
	array('label'=>'Delete ClientCustomers','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->customer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClientCustomers','url'=>array('admin')),
);
?>

<h1>View ClientCustomers #<?php echo $model->customer_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'cid',
		'customer_id',
		'customer_name',
		'address',
		'site_address',
		'tin',
		'po_number',
		'date_created',
		'created_by',
	),
)); ?>
