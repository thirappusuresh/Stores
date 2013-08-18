<?php
$this->breadcrumbs=array(
	'Invoice Items',
);

$this->menu=array(
	array('label'=>'Create InvoiceItems','url'=>array('create')),
	array('label'=>'Manage InvoiceItems','url'=>array('admin')),
);
?>

<h1>Invoice Items</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
