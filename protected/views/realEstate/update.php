<?php
/* @var $this RealEstateController */
/* @var $model RealEstate */

$this->breadcrumbs=array(
	'Real Estates'=>array('index'),
	$model->id_real_estate=>array('view','id'=>$model->id_real_estate),
	'Update',
);

$this->menu=array(
	array('label'=>'List RealEstate', 'url'=>array('index')),
	array('label'=>'Create RealEstate', 'url'=>array('create')),
	array('label'=>'View RealEstate', 'url'=>array('view', 'id'=>$model->id_real_estate)),
	array('label'=>'Manage RealEstate', 'url'=>array('admin')),
);
?>

<h1>Update RealEstate <?php echo $model->id_real_estate; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>