<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->cid,
);

$this->menu=array(
	array('label'=>'List Clients','url'=>array('index')),
	array('label'=>'Create Clients','url'=>array('create')),
	array('label'=>'Update Clients','url'=>array('update','id'=>$model->cid)),
	array('label'=>'Delete Clients','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->cid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clients','url'=>array('admin')),
);
?>

<h1>View Clients #<?php echo $model->cid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'cid',
		'company_name',
		'address',
		'site_address',
		'tin',
		'date_created',
	),
)); ?>
