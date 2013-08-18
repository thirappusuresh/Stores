<?php
$this->breadcrumbs=array(
	'Invoice Items'=>array('index'),
	$model->sid=>array('view','id'=>$model->sid),
	'Update',
);

$this->menu=array(
	array('label'=>'List InvoiceItems','url'=>array('index')),
	array('label'=>'Create InvoiceItems','url'=>array('create')),
	array('label'=>'View InvoiceItems','url'=>array('view','id'=>$model->sid)),
	array('label'=>'Manage InvoiceItems','url'=>array('admin')),
);
?>

<h1>Update InvoiceItems <?php echo $model->sid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>