<?php
$this->breadcrumbs=array(
	'Vats'=>array('index'),
	$model->vid,
);

$this->menu=array(
	array('label'=>'List Vat','url'=>array('index')),
	array('label'=>'Create Vat','url'=>array('create')),
	array('label'=>'Update Vat','url'=>array('update','id'=>$model->vid)),
	array('label'=>'Delete Vat','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->vid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vat','url'=>array('admin')),
);
?>

<h1>View Vat #<?php echo $model->vid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'vid',
		'vat_name',
		'vat_percentage',
		'date_created',
		'created_by',
	),
)); ?>
