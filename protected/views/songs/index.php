<?php
/* @var $this SongsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Songs',
);

$this->menu=array(
	array('label'=>'Create Songs', 'url'=>array('create')),
	array('label'=>'Manage Songs', 'url'=>array('admin')),
);
?>

<h1>Songs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
