<?php
$this->breadcrumbs=array(
	'Dc Items',
);

$this->menu=array(
	array('label'=>'Create DcItems','url'=>array('create')),
	array('label'=>'Manage DcItems','url'=>array('admin')),
);
?>

<h1>Dc Items</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
