<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<?php echo $form->labelEx($model,'songListId'); ?>
		<?php echo $form->textField($model,'songListId'); ?>
		<?php echo $form->error($model,'songListId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orderId'); ?>
		<?php echo $form->textField($model,'orderId'); ?>
		<?php echo $form->error($model,'orderId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->