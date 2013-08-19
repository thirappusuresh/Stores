<?php
$this->breadcrumbs=array(
	'Dc Items'=>array('index'),
	$model->product_code=>array('view','id'=>$model->product_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List DcItems','url'=>array('index')),
	array('label'=>'Create DcItems','url'=>array('create')),
	array('label'=>'View DcItems','url'=>array('view','id'=>$model->product_code)),
	array('label'=>'Manage DcItems','url'=>array('admin')),
);
?>

<h1>Update DcItems <?php echo $model->product_code; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>