<?php
/* @var $this SonglistsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Songlists',
);

$this->menu=array(
	array('label'=>'Create Songlists', 'url'=>array('create')),
	array('label'=>'Manage Songlists', 'url'=>array('admin')),
);
?>

<h1>Songlists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
