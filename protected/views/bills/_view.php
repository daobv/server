<?php
/* @var $this BillsController */
/* @var $data Bills */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerId')); ?>:</b>
	<?php echo CHtml::encode($data->customerId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roomId')); ?>:</b>
	<?php echo CHtml::encode($data->roomId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serviceListId')); ?>:</b>
	<?php echo CHtml::encode($data->serviceListId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receptorId')); ?>:</b>
	<?php echo CHtml::encode($data->receptorId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('checkoutTime')); ?>:</b>
	<?php echo CHtml::encode($data->checkoutTime); ?>
	<br />


</div>