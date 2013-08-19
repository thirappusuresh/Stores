<?php
$this->breadcrumbs=array(
	'Dcs'=>array('index'),
	$model->docket_no=>array('view','id'=>$model->docket_no),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dc','url'=>array('index')),
	array('label'=>'Create Dc','url'=>array('create')),
	array('label'=>'View Dc','url'=>array('view','id'=>$model->docket_no)),
	array('label'=>'Manage Dc','url'=>array('admin')),
);
?>

<h1>Update Dc <?php echo $model->docket_no; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>