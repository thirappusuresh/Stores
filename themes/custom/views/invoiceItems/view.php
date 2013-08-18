<?php
$this->breadcrumbs=array(
	'Invoice Items'=>array('index'),
	$model->sid,
);

$this->menu=array(
	array('label'=>'List InvoiceItems','url'=>array('index')),
	array('label'=>'Create InvoiceItems','url'=>array('create')),
	array('label'=>'Update InvoiceItems','url'=>array('update','id'=>$model->sid)),
	array('label'=>'Delete InvoiceItems','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->sid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvoiceItems','url'=>array('admin')),
);
?>

<h1>View InvoiceItems #<?php echo $model->sid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'sid',
		'iid',
		'quantity',
		'rate',
		'invoice_id',
		'date_created',
		'created_by',
	),
)); ?>
