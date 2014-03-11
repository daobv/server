<?php
/* @var $this BillsController */
/* @var $model Bills */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bills-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customerId'); ?>
		<?php echo $form->textField($model,'customerId'); ?>
		<?php echo $form->error($model,'customerId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'roomId'); ?>
		<?php echo $form->textField($model,'roomId'); ?>
		<?php echo $form->error($model,'roomId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serviceListId'); ?>
		<?php echo $form->textField($model,'serviceListId'); ?>
		<?php echo $form->error($model,'serviceListId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receptorId'); ?>
		<?php echo $form->textField($model,'receptorId'); ?>
		<?php echo $form->error($model,'receptorId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'checkoutTime'); ?>
		<?php echo $form->textField($model,'checkoutTime',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'checkoutTime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->