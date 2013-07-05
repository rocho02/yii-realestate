<?php
/* @var $this FileController */
/* @var $data File */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_file')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_file), array('view', 'id'=>$data->id_file)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_folder')); ?>:</b>
	<?php echo CHtml::encode($data->id_folder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flags')); ?>:</b>
	<?php echo CHtml::encode($data->flags); ?>
	<br />


</div>