<?php
/* @var $this RealEstatePropertiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Real Estate Properties',
);

$this->menu=array(
	array('label'=>'Create RealEstateProperties', 'url'=>array('create')),
	array('label'=>'Manage RealEstateProperties', 'url'=>array('admin')),
);
?>

<h1>Real Estate Properties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
