<?php
$this->breadcrumbs=array(
	'Dc Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DcItems','url'=>array('index')),
	array('label'=>'Manage DcItems','url'=>array('admin')),
);
?>

<h1>Create DcItems</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>