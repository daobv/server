<?php
/* @var $this SongsController */
/* @var $data Songs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('writer')); ?>:</b>
	<?php echo CHtml::encode($data->writer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('singer')); ?>:</b>
	<?php echo CHtml::encode($data->singer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('songListId')); ?>:</b>
	<?php echo CHtml::encode($data->songListId); ?>
	<br />


</div>