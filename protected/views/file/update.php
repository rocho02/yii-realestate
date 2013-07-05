<?php
/* @var $this FileController */
/* @var $model File */

$this->breadcrumbs=array(
	'Files'=>array('index'),
	$model->name=>array('view','id'=>$model->id_file),
	'Update',
);

$this->menu=array(
	array('label'=>'List File', 'url'=>array('index','folder'=>$model->id_folder)),
	array('label'=>'Create File', 'url'=>array( 'create', 'folder'=>$model->id_folder ) ),
	array('label'=>'View File', 'url'=>array('view', 'id'=>$model->id_file)),
	array('label'=>'Manage File', 'url'=>array('admin','folder'=>$model->id_folder)),
);
?>

<h1>Update File <?php echo $model->original_name ." (#".$model->id_file.")"; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>