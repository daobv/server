<?php
/* @var $this FeedbacksController */
/* @var $model Feedbacks */

$this->breadcrumbs=array(
	'Feedbacks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Feedbacks', 'url'=>array('index')),
	array('label'=>'Create Feedbacks', 'url'=>array('create')),
	array('label'=>'View Feedbacks', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Feedbacks', 'url'=>array('admin')),
);
?>

<h1>Update Feedbacks <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>