<?php
/* @var $this ServicelistsidController */
/* @var $model Servicelistsid */

$this->breadcrumbs=array(
	'Servicelistsids'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Servicelistsid', 'url'=>array('index')),
	array('label'=>'Create Servicelistsid', 'url'=>array('create')),
	array('label'=>'View Servicelistsid', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Servicelistsid', 'url'=>array('admin')),
);
?>

<h1>Update Servicelistsid <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>