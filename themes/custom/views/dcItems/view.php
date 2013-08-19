<?php
$this->breadcrumbs=array(
	'Dc Items'=>array('index'),
	$model->product_code,
);

$this->menu=array(
	array('label'=>'List DcItems','url'=>array('index')),
	array('label'=>'Create DcItems','url'=>array('create')),
	array('label'=>'Update DcItems','url'=>array('update','id'=>$model->product_code)),
	array('label'=>'Delete DcItems','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->product_code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DcItems','url'=>array('admin')),
);
?>

<h1>View DcItems #<?php echo $model->product_code; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'docket_no',
		'product_code',
		'design',
		'required_qty',
		'batched_qty',
		'moisture',
		'date_created',
		'created_by',
	),
)); ?>
