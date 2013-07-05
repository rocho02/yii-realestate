<?php
/* @var $this FolderController */
/* @var $model Folder */

$this->breadcrumbs=array(
	'Folders'=>array('index', 're_id'=>$model->id_owner),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Folder', 'url'=>array('index')),
	array('label'=>'Create Folder', 'url'=>array('create')),
	array('label'=>'Update Folder', 'url'=>array('update', 'id'=>$model->id_folder)),
	array('label'=>'Delete Folder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_folder),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Folder', 'url'=>array('admin')),
	array('label'=>'List Files', 'url'=>array('file/index', 'folder'=>$model->id_folder )),
);
?>

<h1>View Folder #<?php echo $model->id_folder; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_folder',
		'creation_date',
		'name',
		'id_owner',
		'type',
		'flags',
		'path',
	),
)); ?>
