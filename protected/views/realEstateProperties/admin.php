<?php
/* @var $this RealEstatePropertiesController */
/* @var $model RealEstateProperties */

$this->breadcrumbs=array(
	'Real Estate Properties'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RealEstateProperties', 'url'=>array('index')),
	array('label'=>'Create RealEstateProperties', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#real-estate-properties-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Real Estate Properties</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'real-estate-properties-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_real_estate_properties',
		'id_real_estate',
		'price_buy',
		'price_rent',
		'area_size',
		'ground_size',
		/*
		'number_of_rooms',
		'number_of_half_rooms',
		'build_date',
		'heating_type',
		'garage_car_1',
		'garage_car_2',
		'parking_garden',
		'parking_public',
		'parking_near',
		'outlook_panorama',
		'outlook_street',
		'outlook_garden',
		'outlook_other',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
