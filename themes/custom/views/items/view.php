<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->iid,
);

$this->menu=array(
	array('label'=>'List Items','url'=>array('index')),
	array('label'=>'Create Items','url'=>array('create')),
	array('label'=>'Update Items','url'=>array('update','id'=>$model->iid)),
	array('label'=>'Delete Items','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->iid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Items','url'=>array('admin')),
);
?>

<h1>View Items #<?php echo $model->iid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'iid',
		'item_name',
		'uom',
		'item_type',
		'date_created',
		'created_by',
	),
)); ?>
