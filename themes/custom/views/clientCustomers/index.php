<?php
$this->breadcrumbs=array(
	'Client Customers',
);

$this->menu=array(
	array('label'=>'Create ClientCustomers','url'=>array('create')),
	array('label'=>'Manage ClientCustomers','url'=>array('admin')),
);
?>

<h1>Client Customers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
