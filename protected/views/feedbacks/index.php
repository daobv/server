<?php
/* @var $this FeedbacksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Feedbacks',
);

$this->menu=array(
	array('label'=>'Create Feedbacks', 'url'=>array('create')),
	array('label'=>'Manage Feedbacks', 'url'=>array('admin')),
);
?>

<h1>Feedbacks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
