<?php
/* @var $this RealEstateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Real Estates',
);

$this->menu=array(
	array('label'=>'Create RealEstate', 'url'=>array('create')),
	array('label'=>'Manage RealEstate', 'url'=>array('admin')),
);
?>

<h1>Real Estates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
