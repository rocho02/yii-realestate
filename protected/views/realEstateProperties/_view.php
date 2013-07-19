<?php
/* @var $this RealEstatePropertiesController */
/* @var $data RealEstateProperties */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_real_estate_properties')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_real_estate_properties), array('view', 'id'=>$data->id_real_estate_properties)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_real_estate')); ?>:</b>
	<?php echo CHtml::encode($data->id_real_estate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_buy')); ?>:</b>
	<?php echo CHtml::encode($data->price_buy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_rent')); ?>:</b>
	<?php echo CHtml::encode($data->price_rent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_size')); ?>:</b>
	<?php echo CHtml::encode($data->area_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ground_size')); ?>:</b>
	<?php echo CHtml::encode($data->ground_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_rooms')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_rooms); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_half_rooms')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_half_rooms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('build_date')); ?>:</b>
	<?php echo CHtml::encode($data->build_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('heating_type')); ?>:</b>
	<?php echo CHtml::encode($data->heating_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garage_car_1')); ?>:</b>
	<?php echo CHtml::encode($data->garage_car_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garage_car_2')); ?>:</b>
	<?php echo CHtml::encode($data->garage_car_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parking_garden')); ?>:</b>
	<?php echo CHtml::encode($data->parking_garden); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parking_public')); ?>:</b>
	<?php echo CHtml::encode($data->parking_public); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parking_near')); ?>:</b>
	<?php echo CHtml::encode($data->parking_near); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outlook_panorama')); ?>:</b>
	<?php echo CHtml::encode($data->outlook_panorama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outlook_street')); ?>:</b>
	<?php echo CHtml::encode($data->outlook_street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outlook_garden')); ?>:</b>
	<?php echo CHtml::encode($data->outlook_garden); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outlook_other')); ?>:</b>
	<?php echo CHtml::encode($data->outlook_other); ?>
	<br />

	*/ ?>

</div>