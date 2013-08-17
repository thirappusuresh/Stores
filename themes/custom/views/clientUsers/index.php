<?php
$this->breadcrumbs=array(
	'Client Users',
);

$this->menu=array(
	array('label'=>'Create ClientUsers','url'=>array('create')),
	array('label'=>'Manage ClientUsers','url'=>array('admin')),
);
?>

<h1>Client Users</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
