<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'roomId'); ?>
		<?php echo $form->textField($model,'roomId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serviceListId'); ?>
		<?php echo $form->textField($model,'serviceListId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'songListId'); ?>
		<?php echo $form->textField($model,'songListId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orderId'); ?>
		<?php echo $form->textField($model,'orderId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->