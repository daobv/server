<?php
/* @var $this FeedbacksController */
/* @var $model Feedbacks */

$this->breadcrumbs=array(
	'Feedbacks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Feedbacks', 'url'=>array('index')),
	array('label'=>'Manage Feedbacks', 'url'=>array('admin')),
);
?>

<h1>Create Feedbacks</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>