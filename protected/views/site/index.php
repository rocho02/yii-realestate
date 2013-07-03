<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
// 			$cs->registerScriptFile($baseUrl.'/js/yourscript.js');
$cs->registerCssFile($baseUrl.'/css/index.css');


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

?>
<div class="form">
<?php
$form = $this->beginWidget('CActiveForm', array(
    //'id'=>'user-form',
   // 'enableAjaxValidation'=>true,
  //  'enableClientValidation'=>true,
    'focus'=>array($model,'city_autocomplete_value'),
));

?>
<div class="row">
<?php 



echo CHtml::label(Yii::t('app', 'Település: '), 'city_autocomplete_value' );
// Note: ext.MyAutoComplete is equivalent/shortcut to application.extensions.MyAutoComplete
// This means Look for protected/extensions/MyAutoComplete.php file
$this->widget('application.extensions.cityautocomplete.CityAutocomplete', array(
		'model'=>$model,
		'attribute'=>'city_autocomplete_value',//name of hidden as form member
		'name'=>"city_autocomplete_label",//name of visible text field
		'source'=>$this->createUrl('site/cityAutoComplete'),  // Controller/Action path for action we created in step 4.
// 		// additional javascript options for the autocomplete plugin
// 		'options'=>array(
// 				'minLength'=>'0',
// 		),
 		'value'=>   $model->city_autocomplete_label,//value of the visible text input
		'options' => array(
				'showAnim' => 'fold',
		),
		'htmlOptions'=>array(
				'style'=>'height:20px;',
				'onblur'=>'javascript:   if ( $("#city_autocomplete_label").val() == "" ) {   $("#' . CHtml::activeId($model,'city_autocomplete_value') . '").val(""); }',
		),
));

echo $form->error($model, 'city_autocomplete_value');
?>
</div>
<div class="row" >
<?php 
echo $form->labelEx($model,'type');  
echo $form->dropDownList( $model, "type" , RealEstate::getTypes() );
echo $form->error($model, 'type');	 
?>
</div>
<div class="row" >
<?php 


echo $form->labelEx($model, 'price_from'); 
echo $form->textField($model, 'price_from', array('size' => 5, 'maxlength' => 5)); 
echo $form->error($model, 'price_from'); 
?>
</div>
<div class="row" >
<?php 
echo $form->labelEx($model, 'price_to');
echo $form->textField($model, 'price_to', array('size' => 5, 'maxlength' => 5));
echo $form->error($model, 'price_to');

?>
</div>
<div class="row buttons">
<?php 

echo "<div class=\"row buttons\">";
 echo CHtml::submitButton('Search'); 
 echo "</div>"; 

$this->endWidget();
?>
</div>
</div>