<?php
$this->breadcrumbs=array(
	'Store Outs'=>array('index'),
	$model->sout_id,
);

$this->menu=array(
	array('label'=>'List StoreOut','url'=>array('index')),
	array('label'=>'Create StoreOut','url'=>array('create')),
	array('label'=>'Update StoreOut','url'=>array('update','id'=>$model->sout_id)),
	array('label'=>'Delete StoreOut','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->sout_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StoreOut','url'=>array('admin')),
);
?>

<h1>View StoreOut #<?php echo $model->sout_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'sout_id',
		'iid',
		'quantity',
		'date',
		'vehicle',
		'issued_to',
		'rate',
		'date_created',
		'created_by',
	),
)); ?>
