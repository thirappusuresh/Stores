<?php
$this->breadcrumbs=array(
	'Client Customers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClientCustomers','url'=>array('index')),
	array('label'=>'Manage ClientCustomers','url'=>array('admin')),
);
?>

<h1>Create ClientCustomers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>