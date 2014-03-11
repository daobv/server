<?php
/* @var $this BillsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bills',
);

$this->menu=array(
	array('label'=>'Create Bills', 'url'=>array('create')),
	array('label'=>'Manage Bills', 'url'=>array('admin')),
);
?>

<h1>Bills</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
