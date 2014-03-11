<?php
/* @var $this ReceptorsController */
/* @var $model Receptors */

$this->breadcrumbs=array(
	'Receptors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Receptors', 'url'=>array('index')),
	array('label'=>'Create Receptors', 'url'=>array('create')),
	array('label'=>'Update Receptors', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Receptors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Receptors', 'url'=>array('admin')),
);
?>

<h1>View Receptors #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'password',
		'feedbackId',
	),
)); ?>
