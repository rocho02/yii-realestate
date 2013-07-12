<?php
/* @var $this AdvertismentController */
/* @var $model Advertisment */

$this->breadcrumbs=array(
	'Advertisments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Advertisment', 'url'=>array('index')),
	array('label'=>'Manage Advertisment', 'url'=>array('admin')),
);
?>

<h1>Create Advertisment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'realEstate'=>$realEstate)); ?>