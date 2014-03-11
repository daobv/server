<?php
/* @var $this SonglistsController */
/* @var $model Songlists */

$this->breadcrumbs=array(
	'Songlists'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Songlists', 'url'=>array('index')),
	array('label'=>'Create Songlists', 'url'=>array('create')),
	array('label'=>'View Songlists', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Songlists', 'url'=>array('admin')),
);
?>

<h1>Update Songlists <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>