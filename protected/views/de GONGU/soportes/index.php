<?php
/* @var $this SoportesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Soportes',
);

$this->menu=array(
	array('label'=>'Create Soportes', 'url'=>array('create')),
	array('label'=>'Manage Soportes', 'url'=>array('admin')),
);
?>

<h1>Soportes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
