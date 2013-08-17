<?php
$this->breadcrumbs=array(
	'Store Ins'=>array('index'),
	$model->sin_id,
);

$this->menu=array(
	array('label'=>'List StoreIn','url'=>array('index')),
	array('label'=>'Create StoreIn','url'=>array('create')),
	array('label'=>'Update StoreIn','url'=>array('update','id'=>$model->sin_id)),
	array('label'=>'Delete StoreIn','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->sin_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StoreIn','url'=>array('admin')),
);
?>

<h1>View StoreIn #<?php echo $model->sin_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'sin_id',
		'iid',
		'quantity',
		'current_quantity',
		'date',
		'vehicle',
		'received_from',
		'rate',
		'date_created',
		'created_by',
	),
)); ?>
