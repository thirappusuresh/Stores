<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->cid=>array('view','id'=>$model->cid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clients','url'=>array('index')),
	array('label'=>'Create Clients','url'=>array('create')),
	array('label'=>'View Clients','url'=>array('view','id'=>$model->cid)),
	array('label'=>'Manage Clients','url'=>array('admin')),
);
?>

<h1>Update Clients <?php echo $model->cid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>