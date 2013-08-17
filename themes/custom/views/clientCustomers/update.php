<?php
$this->breadcrumbs=array(
	'Client Customers'=>array('index'),
	$model->customer_id=>array('view','id'=>$model->customer_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClientCustomers','url'=>array('index')),
	array('label'=>'Create ClientCustomers','url'=>array('create')),
	array('label'=>'View ClientCustomers','url'=>array('view','id'=>$model->customer_id)),
	array('label'=>'Manage ClientCustomers','url'=>array('admin')),
);
?>

<h1>Update ClientCustomers <?php echo $model->customer_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>