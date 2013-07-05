<?php
/* @var $this FolderController */
/* @var $data Folder */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_folder')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_folder), array('view', 'id'=>$data->id_folder)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_owner')); ?>:</b>
	<?php echo CHtml::encode($data->id_owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flags')); ?>:</b>
	<?php echo CHtml::encode($data->flags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('path')); ?>:</b>
	<?php echo CHtml::encode($data->path); ?>
	<br />


</div>