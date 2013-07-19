<?php
/* @var $this RealEstatePropertiesController */
/* @var $model RealEstateProperties */

$this->breadcrumbs=array(
	'Real Estate Properties'=>array('index'),
	$model->id_real_estate_properties=>array('view','id'=>$model->id_real_estate_properties),
	'Update',
);

$this->menu=array(
	array('label'=>'List RealEstateProperties', 'url'=>array('index')),
	array('label'=>'Create RealEstateProperties', 'url'=>array('create')),
	array('label'=>'View RealEstateProperties', 'url'=>array('view', 'id'=>$model->id_real_estate_properties)),
	array('label'=>'Manage RealEstateProperties', 'url'=>array('admin')),
);
?>

<h1>Update RealEstateProperties <?php echo $model->id_real_estate_properties; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>