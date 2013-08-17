<?php
$this->breadcrumbs=array(
	'Vats'=>array('index'),
	$model->vid=>array('view','id'=>$model->vid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vat','url'=>array('index')),
	array('label'=>'Create Vat','url'=>array('create')),
	array('label'=>'View Vat','url'=>array('view','id'=>$model->vid)),
	array('label'=>'Manage Vat','url'=>array('admin')),
);
?>

<h1>Update Vat <?php echo $model->vid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>