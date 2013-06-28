<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

/*

$this->widget('application.extensions.rnslideshow.RnSlideShow',
		array(
				'images' => array(
						array(Yii::app()->request->baseUrl .'/images/img01.jpg'),
						array(Yii::app()->request->baseUrl .'/images/img02.jpg'),
				),
				'width' => '720',
				'height' => '300',
		)
);

*/
$form = $this->beginWidget('CActiveForm', array(
    //'id'=>'user-form',
   // 'enableAjaxValidation'=>true,
  //  'enableClientValidation'=>true,
    //'focus'=>array($model,'city_autocomplete'),
));

echo CHtml::label(Yii::t('app', 'Település: '), 'city_autocomplete');
// Note: ext.MyAutoComplete is equivalent/shortcut to application.extensions.MyAutoComplete
// This means Look for protected/extensions/MyAutoComplete.php file
$this->widget('application.extensions.cityautocomplete.CityAutocomplete', array(
		'model'=>$model,
		'attribute'=>'id_city',
		'name'=>'city_autocomplete',
		'source'=>$this->createUrl('site/cityAutoComplete'),  // Controller/Action path for action we created in step 4.
		// additional javascript options for the autocomplete plugin
		'options'=>array(
				'minLength'=>'0',
		),
		
		'htmlOptions'=>array(
				'style'=>'height:20px;',
		),
));

echo $form->labelEx($model,'type');  
echo $form->dropDownList( $model, "type" , RealEstate::getTypes() );
echo $form->error($model, 'type'); 

$this->endWidget();
?>


