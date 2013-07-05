<?php
/* @var $this FileController */
/* @var $model File */

$this->breadcrumbs=array(
	'Files'=>array('index', 'folder'=>$model->id_folder ),
	$model->name,
);

$this->menu=array(
	array('label'=>'List File', 'url'=>array('index','folder'=>$model->id_folder)),
	array('label'=>'Create File', 'url'=>array('create','folder'=>$model->id_folder)),
	array('label'=>'Update File', 'url'=>array('update', 'id'=>$model->id_file)),
	array('label'=>'Delete File', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_file),'confirm'=>'Are you sure you want to delete this item?','returnUrl'=>Yii::app()->createUrl('file/index'))),
	array('label'=>'Manage File', 'url'=>array('admin')),
);
?>

<h1>View File #<?php echo $model->id_file; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_file',
		'creation_date',
		'name',
		'id_folder',
		'flags',
	),
)); ?>
