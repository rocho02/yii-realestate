<?php
/* @var $this FolderController */
/* @var $model Folder */

$this->breadcrumbs=array(
	'Folders'=>array('index'),
	$model->name=>array('view','id'=>$model->id_folder),
	'Update',
);

$this->menu=array(
	array('label'=>'List Folder', 'url'=>array('index')),
	array('label'=>'Create Folder', 'url'=>array('create')),
	array('label'=>'View Folder', 'url'=>array('view', 'id'=>$model->id_folder)),
	array('label'=>'Manage Folder', 'url'=>array('admin')),
);
?>

<h1>Update Folder <?php echo $model->id_folder; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>