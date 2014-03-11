<?php
/* @var $this SonglistsController */
/* @var $model Songlists */

$this->breadcrumbs=array(
	'Songlists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Songlists', 'url'=>array('index')),
	array('label'=>'Manage Songlists', 'url'=>array('admin')),
);
?>

<h1>Create Songlists</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>