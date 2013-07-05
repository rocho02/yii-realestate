<?php
/* @var $this FolderController */
/* @var $model Folder */

$this->breadcrumbs=array(
	'Folders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Folder', 'url'=>array('index','re_id'=>$model->id_owner)),
	array('label'=>'Manage Folder', 'url'=>array('admin')),
);
?>

<h1>Create Folder</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>