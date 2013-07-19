<?php
/* @var $this AdvertismentController */
/* @var $model Advertisment */
/* @var $form CActiveForm */

Yii::import('ext.imperavi-redactor-widget-master.ImperaviRedactorWidget');


?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'advertisment-form',
			'enableAjaxValidation'=>false,
)); ?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary( $model ); ?>
	<?php echo $form->errorSummary( $realEstate ); ?>
	<?php echo $form->errorSummary( $realEstateProperties ); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teaser'); ?>
		<?php /*echo $form->textArea($model,'teaser',array('rows'=>6, 'cols'=>50)); */?>
		<?php 
		$this->widget('ImperaviRedactorWidget', array(
				// You can either use it for model attribute
				'model' => $model,
				'attribute' => 'teaser',

				// or just for input field
				'name' => 'teaser',

				// Some options, see http://imperavi.com/redactor/docs/
				'options' => array(	),
		));
		?>
		<?php echo $form->error($model,'teaser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php /*echo $form->textArea($model,'text',array('rows'=>6, 'cols'=>50)); */?>
		<?php 
		$this->widget('ImperaviRedactorWidget', array(
				// You can either use it for model attribute
				'model' => $model,
				'attribute' => 'text',

				// or just for input field
				'name' => 'text',

				// Some options, see http://imperavi.com/redactor/docs/
				'options' => array(	" autoresize" =>true),
		));
		?>
		
		<?php echo $form->error($model,'text'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Validity Date'); ?>
	<?php 
$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		 'model'=>$model,
		'attribute'=>'validity_time',
		'language' => 'hu',
   		 //'name'=>'Advertisment[validity_time_str]',
		// additional javascript options for the date picker plugin
		'options'=>array(
				'showAnim'=>'fold',
				'maxDate'=>'"+1m'
		),
		//'value'=>$model->getValidityTimeInput(),
		'htmlOptions'=>array(
				'style'=>'height:20px;'
		),
));
?>

</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale'); ?>
		<?php echo $form->checkBox($model,'sale'); ?>
		<?php echo $form->error($model,'sale'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'rent'); ?>
		<?php echo $form->checkBox($model,'rent'); ?>
		<?php echo $form->error($model,'rent'); ?>
	</div>


	<?php $this->renderPartial('_real_estate',array('model'=>$realEstate,'form' =>$form)); ?>
	<?php $this->renderPartial('_real_estate_properties',array('model'=>$realEstateProperties,'form' =>$form)); ?>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div>
<!-- form -->
