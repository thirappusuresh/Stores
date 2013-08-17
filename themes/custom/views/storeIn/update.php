<?php
$this->breadcrumbs=array(
	'Store Ins'=>array('index'),
	$model->sin_id=>array('view','id'=>$model->sin_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StoreIn','url'=>array('index')),
	array('label'=>'Create StoreIn','url'=>array('create')),
	array('label'=>'View StoreIn','url'=>array('view','id'=>$model->sin_id)),
	array('label'=>'Manage StoreIn','url'=>array('admin')),
);
?>

<h1>Update StoreIn <?php echo $model->sin_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>