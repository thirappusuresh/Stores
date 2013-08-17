<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->iid=>array('view','id'=>$model->iid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Items','url'=>array('index')),
	array('label'=>'Create Items','url'=>array('create')),
	array('label'=>'View Items','url'=>array('view','id'=>$model->iid)),
	array('label'=>'Manage Items','url'=>array('admin')),
);
?>

<h1>Update Items <?php echo $model->iid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>