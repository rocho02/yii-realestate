<?php
/* @var $this RealEstateController */
/* @var $model RealEstate */

$this->breadcrumbs=array(
	'Real Estates'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RealEstate', 'url'=>array('index')),
	array('label'=>'Create RealEstate', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#real-estate-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Real Estates</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'real-estate-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_real_estate',
		'creation_date',
		'description',
		'adress',
		'type',
		'status',
		/*
		'state',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
