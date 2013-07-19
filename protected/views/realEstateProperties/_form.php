<?php
/* @var $this RealEstatePropertiesController */
/* @var $model RealEstateProperties */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'real-estate-properties-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_real_estate'); ?>
		<?php echo $form->textField($model,'id_real_estate'); ?>
		<?php echo $form->error($model,'id_real_estate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_buy'); ?>
		<?php echo $form->textField($model,'price_buy'); ?>
		<?php echo $form->error($model,'price_buy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_rent'); ?>
		<?php echo $form->textField($model,'price_rent'); ?>
		<?php echo $form->error($model,'price_rent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area_size'); ?>
		<?php echo $form->textField($model,'area_size'); ?>
		<?php echo $form->error($model,'area_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ground_size'); ?>
		<?php echo $form->textField($model,'ground_size'); ?>
		<?php echo $form->error($model,'ground_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number_of_rooms'); ?>
		<?php echo $form->textField($model,'number_of_rooms'); ?>
		<?php echo $form->error($model,'number_of_rooms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number_of_half_rooms'); ?>
		<?php echo $form->textField($model,'number_of_half_rooms'); ?>
		<?php echo $form->error($model,'number_of_half_rooms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'build_date'); ?>
		<?php echo $form->textField($model,'build_date'); ?>
		<?php echo $form->error($model,'build_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'heating_type'); ?>
		<?php echo $form->textField($model,'heating_type'); ?>
		<?php echo $form->error($model,'heating_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'garage_car_1'); ?>
		<?php echo $form->textField($model,'garage_car_1'); ?>
		<?php echo $form->error($model,'garage_car_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'garage_car_2'); ?>
		<?php echo $form->textField($model,'garage_car_2'); ?>
		<?php echo $form->error($model,'garage_car_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parking_garden'); ?>
		<?php echo $form->textField($model,'parking_garden'); ?>
		<?php echo $form->error($model,'parking_garden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parking_public'); ?>
		<?php echo $form->textField($model,'parking_public'); ?>
		<?php echo $form->error($model,'parking_public'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parking_near'); ?>
		<?php echo $form->textField($model,'parking_near'); ?>
		<?php echo $form->error($model,'parking_near'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outlook_panorama'); ?>
		<?php echo $form->textField($model,'outlook_panorama'); ?>
		<?php echo $form->error($model,'outlook_panorama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outlook_street'); ?>
		<?php echo $form->textField($model,'outlook_street'); ?>
		<?php echo $form->error($model,'outlook_street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outlook_garden'); ?>
		<?php echo $form->textField($model,'outlook_garden'); ?>
		<?php echo $form->error($model,'outlook_garden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outlook_other'); ?>
		<?php echo $form->textField($model,'outlook_other'); ?>
		<?php echo $form->error($model,'outlook_other'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->