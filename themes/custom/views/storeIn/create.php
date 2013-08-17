<?php
$this->breadcrumbs=array(
	'Store Ins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StoreIn','url'=>array('index')),
	array('label'=>'Manage StoreIn','url'=>array('admin')),
);
?>

<h1>Create StoreIn</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>