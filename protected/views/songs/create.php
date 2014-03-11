<?php
/* @var $this SongsController */
/* @var $model Songs */

$this->breadcrumbs=array(
	'Songs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Songs', 'url'=>array('index')),
	array('label'=>'Manage Songs', 'url'=>array('admin')),
);
?>

<h1>Create Songs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>