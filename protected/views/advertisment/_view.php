<?php
/* @var $this AdvertismentController */
/* @var $data Advertisment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_advertisment')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_advertisment), array('view', 'id'=>$data->id_advertisment)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_real_estate')); ?>:</b>
	<?php echo CHtml::encode($data->id_real_estate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validity_time')); ?>:</b>
	<?php echo CHtml::encode($data->validity_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verified')); ?>:</b>
	<?php echo CHtml::encode($data->verified); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('flags')); ?>:</b>
	<?php echo CHtml::encode($data->flags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teaser')); ?>:</b>
	<?php echo CHtml::encode($data->teaser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	*/ ?>

</div>