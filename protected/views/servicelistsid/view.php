<?php
/* @var $this ServicelistsidController */
/* @var $model Servicelistsid */

$this->breadcrumbs=array(
	'Servicelistsids'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Servicelistsid', 'url'=>array('index')),
	array('label'=>'Create Servicelistsid', 'url'=>array('create')),
	array('label'=>'Update Servicelistsid', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Servicelistsid', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Servicelistsid', 'url'=>array('admin')),
);
?>

<h1>View Servicelistsid #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
