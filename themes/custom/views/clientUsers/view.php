<?php
$this->breadcrumbs=array(
	'Client Users'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ClientUsers','url'=>array('index')),
	array('label'=>'Create ClientUsers','url'=>array('create')),
	array('label'=>'Update ClientUsers','url'=>array('update','id'=>$model->uid)),
	array('label'=>'Delete ClientUsers','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->uid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClientUsers','url'=>array('admin')),
);
?>

<h1>View ClientUsers #<?php echo $model->uid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'cid',
		'uid',
		'login_id',
		'password',
		'name',
		'email',
		'date_created',
	),
)); ?>
