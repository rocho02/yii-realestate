<?php
/* @var $this RealEstateController */
/* @var $model RealEstate */
/* @var $form CActiveForm */
?>


<div class="row">
	<?php echo $form->labelEx($model,'id_city'); ?>
	<?php 
	$this->widget('application.extensions.cityautocomplete.CityAutocomplete', array(
			'model'=>$model,
			'attribute'=>'id_city',//name of hidden as form member
			'name'=>"city_autocomplete_label",//name of visible text field
			'source'=>$this->createUrl('site/cityAutoComplete'),  // Controller/Action path for action we created in step 4.
			'value'=>   $model->city_autocomplete_label,//value of the visible text input
			'options' => array(
					'showAnim' => 'fold',
			),
			'htmlOptions'=>array(
					'style'=>'height:20px;',
					'onblur'=>'javascript:   if ( $("#city_autocomplete_label").val() == "" ) {   $("#' . CHtml::activeId($model,'city_autocomplete_value') . '").val(""); }',
			),
	));
	?>
	<?php echo $form->error($model,'id_city'); ?>
</div>


<div class="row">
	<?php echo $form->labelEx($model,'adress'); ?>
	<?php echo $form->textField($model,'adress',array('size'=>60,'maxlength'=>500)); ?>
	<?php echo $form->error($model,'adress'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'type'); ?>
	<?php echo $form->dropDownList($model,'type',RealEstate::getTypes()); ?>
	<?php echo $form->error($model,'type'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'sold'); ?>
	<?php echo $form->checkbox($model,'status'); ?>
	<?php echo $form->error($model,'status'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'state'); ?>
	<?php echo $form->dropDownList($model,'state',$model->getStates() ); ?>
	<?php echo $form->error($model,'state'); ?>
</div>


