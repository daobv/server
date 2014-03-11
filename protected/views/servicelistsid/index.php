<?php
/* @var $this ServicelistsidController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Servicelistsids',
);

$this->menu=array(
	array('label'=>'Create Servicelistsid', 'url'=>array('create')),
	array('label'=>'Manage Servicelistsid', 'url'=>array('admin')),
);
?>

<h1>Servicelistsids</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
