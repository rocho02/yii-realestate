<?php
/* @var $this RealEstatePropertiesController */
/* @var $model RealEstateProperties */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_real_estate_properties'); ?>
		<?php echo $form->textField($model,'id_real_estate_properties'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_real_estate'); ?>
		<?php echo $form->textField($model,'id_real_estate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_buy'); ?>
		<?php echo $form->textField($model,'price_buy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_rent'); ?>
		<?php echo $form->textField($model,'price_rent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area_size'); ?>
		<?php echo $form->textField($model,'area_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ground_size'); ?>
		<?php echo $form->textField($model,'ground_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'number_of_rooms'); ?>
		<?php echo $form->textField($model,'number_of_rooms'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'number_of_half_rooms'); ?>
		<?php echo $form->textField($model,'number_of_half_rooms'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'build_date'); ?>
		<?php echo $form->textField($model,'build_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'heating_type'); ?>
		<?php echo $form->textField($model,'heating_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garage_car_1'); ?>
		<?php echo $form->textField($model,'garage_car_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garage_car_2'); ?>
		<?php echo $form->textField($model,'garage_car_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parking_garden'); ?>
		<?php echo $form->textField($model,'parking_garden'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parking_public'); ?>
		<?php echo $form->textField($model,'parking_public'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parking_near'); ?>
		<?php echo $form->textField($model,'parking_near'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outlook_panorama'); ?>
		<?php echo $form->textField($model,'outlook_panorama'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outlook_street'); ?>
		<?php echo $form->textField($model,'outlook_street'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outlook_garden'); ?>
		<?php echo $form->textField($model,'outlook_garden'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outlook_other'); ?>
		<?php echo $form->textField($model,'outlook_other'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->