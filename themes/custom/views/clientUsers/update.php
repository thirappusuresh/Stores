<?php
$this->breadcrumbs=array(
	'Client Users'=>array('index'),
	$model->name=>array('view','id'=>$model->uid),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClientUsers','url'=>array('index')),
	array('label'=>'Create ClientUsers','url'=>array('create')),
	array('label'=>'View ClientUsers','url'=>array('view','id'=>$model->uid)),
	array('label'=>'Manage ClientUsers','url'=>array('admin')),
);
?>

<h1>Update ClientUsers <?php echo $model->uid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>