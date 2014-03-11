<?php
/* @var $this SongsController */
/* @var $model Songs */

$this->breadcrumbs=array(
	'Songs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Songs', 'url'=>array('index')),
	array('label'=>'Create Songs', 'url'=>array('create')),
	array('label'=>'Update Songs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Songs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Songs', 'url'=>array('admin')),
);
?>

<h1>View Songs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'writer',
		'singer',
		'type',
		'songListId',
	),
)); ?>
