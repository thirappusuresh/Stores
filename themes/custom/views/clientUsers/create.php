<?php
$this->breadcrumbs=array(
	'Client Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClientUsers','url'=>array('index')),
	array('label'=>'Manage ClientUsers','url'=>array('admin')),
);
?>

<h1>Create ClientUsers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>