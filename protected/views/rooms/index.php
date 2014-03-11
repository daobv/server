<?php
/* @var $this RoomsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rooms',
);

$this->menu=array(
	array('label'=>'Create Rooms', 'url'=>array('create')),
	array('label'=>'Manage Rooms', 'url'=>array('admin')),
);
?>

<h1>Rooms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
