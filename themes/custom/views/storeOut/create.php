<?php
$this->breadcrumbs=array(
	'Store Outs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StoreOut','url'=>array('index')),
	array('label'=>'Manage StoreOut','url'=>array('admin')),
);
?>

<h1>Create StoreOut</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>