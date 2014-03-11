<?php
/* @var $this BillsController */
/* @var $model Bills */
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
		<?php echo $form->label($model,'customerId'); ?>
		<?php echo $form->textField($model,'customerId'); ?>
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
		<?php echo $form->label($model,'receptorId'); ?>
		<?php echo $form->textField($model,'receptorId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'checkoutTime'); ?>
		<?php echo $form->textField($model,'checkoutTime',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->