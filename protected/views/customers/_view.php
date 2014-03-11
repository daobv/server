<?php
/* @var $this CustomersController */
/* @var $data Customers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roomId')); ?>:</b>
	<?php echo CHtml::encode($data->roomId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serviceListId')); ?>:</b>
	<?php echo CHtml::encode($data->serviceListId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('songListId')); ?>:</b>
	<?php echo CHtml::encode($data->songListId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderId')); ?>:</b>
	<?php echo CHtml::encode($data->orderId); ?>
	<br />


</div>