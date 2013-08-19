<?php
$this->breadcrumbs=array(
	'Dcs',
);

$this->menu=array(
	array('label'=>'Create Dc','url'=>array('create')),
	array('label'=>'Manage Dc','url'=>array('admin')),
);
?>

<h1>Dcs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
