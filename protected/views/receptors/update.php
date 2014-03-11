<?php
/* @var $this ReceptorsController */
/* @var $model Receptors */

$this->breadcrumbs=array(
	'Receptors'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Receptors', 'url'=>array('index')),
	array('label'=>'Create Receptors', 'url'=>array('create')),
	array('label'=>'View Receptors', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Receptors', 'url'=>array('admin')),
);
?>

<h1>Update Receptors <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>