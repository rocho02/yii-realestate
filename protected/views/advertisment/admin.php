<?php
/* @var $this AdvertismentController */
/* @var $model Advertisment */

$this->breadcrumbs=array(
	'Advertisments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Advertisment', 'url'=>array('index')),
	array('label'=>'Create Advertisment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#advertisment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Advertisments</h1>

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
	'id'=>'advertisment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_advertisment',
		'id_user',
		'id_real_estate',
		'create_time',
		'update_time',
		'validity_time',
		/*
		'verified',
		'flags',
		'type',
		'title',
		'teaser',
		'text',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
