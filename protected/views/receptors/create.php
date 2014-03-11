<?php
/* @var $this ReceptorsController */
/* @var $model Receptors */

$this->breadcrumbs=array(
	'Receptors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Receptors', 'url'=>array('index')),
	array('label'=>'Manage Receptors', 'url'=>array('admin')),
);
?>

<h1>Create Receptors</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>