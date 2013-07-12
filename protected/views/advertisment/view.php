<?php
/* @var $this AdvertismentController */
/* @var $model Advertisment */

$this->breadcrumbs=array(
	'Advertisments'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Advertisment', 'url'=>array('index')),
	array('label'=>'Create Advertisment', 'url'=>array('create')),
	array('label'=>'Update Advertisment', 'url'=>array('update', 'id'=>$model->id_advertisment)),
	array('label'=>'Delete Advertisment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_advertisment),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Advertisment', 'url'=>array('admin')),
);
?>

<h1>View Advertisment #<?php echo $model->id_advertisment; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_advertisment',
		'id_user',
		'id_real_estate',
		'create_time',
		'update_time',
		'validity_time',
		'verified',
		'flags',
		'type',
		'title',
		'teaser',
		'text',
	),
)); ?>
