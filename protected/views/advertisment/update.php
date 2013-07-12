<?php
/* @var $this AdvertismentController */
/* @var $model Advertisment */

$this->breadcrumbs=array(
	'Advertisments'=>array('index'),
	$model->title=>array('view','id'=>$model->id_advertisment),
	'Update',
);

$this->menu=array(
	array('label'=>'List Advertisment', 'url'=>array('index')),
	array('label'=>'Create Advertisment', 'url'=>array('create')),
	array('label'=>'View Advertisment', 'url'=>array('view', 'id'=>$model->id_advertisment)),
	array('label'=>'Manage Advertisment', 'url'=>array('admin')),
);
?>

<h1>Update Advertisment <?php echo $model->id_advertisment; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>