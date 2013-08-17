<?php
$this->breadcrumbs=array(
	'Store Ins'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List StoreIn','url'=>array('index')),
	array('label'=>'Create StoreIn','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('store-in-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Store Ins</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'store-in-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'sin_id',
		'iid',
		'quantity',
		'current_quantity',
		'date',
		'vehicle',
		/*
		'received_from',
		'rate',
		'date_created',
		'created_by',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
