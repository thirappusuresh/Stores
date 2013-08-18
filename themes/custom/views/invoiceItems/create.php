<?php
$this->breadcrumbs=array(
	'Invoice Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InvoiceItems','url'=>array('index')),
	array('label'=>'Manage InvoiceItems','url'=>array('admin')),
);
?>

<h1>Create InvoiceItems</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>