<?php
/* @var $this RealEstatePropertiesController */
/* @var $model RealEstateProperties */

$this->breadcrumbs=array(
	'Real Estate Properties'=>array('index'),
	$model->id_real_estate_properties,
);

$this->menu=array(
	array('label'=>'List RealEstateProperties', 'url'=>array('index')),
	array('label'=>'Create RealEstateProperties', 'url'=>array('create')),
	array('label'=>'Update RealEstateProperties', 'url'=>array('update', 'id'=>$model->id_real_estate_properties)),
	array('label'=>'Delete RealEstateProperties', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_real_estate_properties),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RealEstateProperties', 'url'=>array('admin')),
);
?>

<h1>View RealEstateProperties #<?php echo $model->id_real_estate_properties; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_real_estate_properties',
		'id_real_estate',
		'price_buy',
		'price_rent',
		'area_size',
		'ground_size',
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
	),
)); ?>
