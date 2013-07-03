<?php
/* @var $this RealEstateController */
/* @var $model RealEstate */

$this->breadcrumbs=array(
	'Real Estates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RealEstate', 'url'=>array('index')),
	array('label'=>'Manage RealEstate', 'url'=>array('admin')),
);
?>

<h1>Create RealEstate</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>