<?php
/* @var $this RealEstatePropertiesController */
/* @var $model RealEstateProperties */

$this->breadcrumbs=array(
	'Real Estate Properties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RealEstateProperties', 'url'=>array('index')),
	array('label'=>'Manage RealEstateProperties', 'url'=>array('admin')),
);
?>

<h1>Create RealEstateProperties</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>