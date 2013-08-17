<?php
$this->breadcrumbs=array(
	'Store Outs'=>array('index'),
	$model->sout_id=>array('view','id'=>$model->sout_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StoreOut','url'=>array('index')),
	array('label'=>'Create StoreOut','url'=>array('create')),
	array('label'=>'View StoreOut','url'=>array('view','id'=>$model->sout_id)),
	array('label'=>'Manage StoreOut','url'=>array('admin')),
);
?>

<h1>Update StoreOut <?php echo $model->sout_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>