<?php
/* @var $this AdvertismentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Advertisments',
);

$this->menu=array(
	array('label'=>'Create Advertisment', 'url'=>array('create')),
	array('label'=>'Manage Advertisment', 'url'=>array('admin')),
);
?>

<h1>Advertisments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
