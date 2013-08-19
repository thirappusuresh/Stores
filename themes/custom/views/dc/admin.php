<?php
$this->breadcrumbs=array(
	'Dcs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dc','url'=>array('index')),
	array('label'=>'Create Dc','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('dc-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dcs</h1>

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
	'id'=>'dc-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'docket_no',
		'driver',
		'date',
		'vehicle_no',
		'job_no',
		'client_name',
		/*
		'site_name',
		'address',
		'a_no',
		'order_no',
		'mix_des',
		'mix_title',
		'ordered_qty',
		'dispatched_qty',
		'cumulative_qty',
		'this_load',
		'concrete_grade',
		'slump',
		'aggregate',
		'admixture',
		'cement',
		'special_requirement',
		'pump_type',
		'pump_name',
		'pumped_qty',
		'pump_time',
		'date_created',
		'created_by',
		'cid',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
