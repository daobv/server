<?php
/* @var $this ServicelistsidController */
/* @var $model Servicelistsid */

$this->breadcrumbs=array(
	'Servicelistsids'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Servicelistsid', 'url'=>array('index')),
	array('label'=>'Manage Servicelistsid', 'url'=>array('admin')),
);
?>

<h1>Create Servicelistsid</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>