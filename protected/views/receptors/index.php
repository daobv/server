<?php
/* @var $this ReceptorsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Receptors',
);

$this->menu=array(
	array('label'=>'Create Receptors', 'url'=>array('create')),
	array('label'=>'Manage Receptors', 'url'=>array('admin')),
);
?>

<h1>Receptors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
