<?php
/* @var $this RoomsController */
/* @var $model Rooms */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rooms', 'url'=>array('index')),
	array('label'=>'Manage Rooms', 'url'=>array('admin')),
);
?>

<h1>Create Rooms</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>