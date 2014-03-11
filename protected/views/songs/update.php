<?php
/* @var $this SongsController */
/* @var $model Songs */

$this->breadcrumbs=array(
	'Songs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Songs', 'url'=>array('index')),
	array('label'=>'Create Songs', 'url'=>array('create')),
	array('label'=>'View Songs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Songs', 'url'=>array('admin')),
);
?>

<h1>Update Songs <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>