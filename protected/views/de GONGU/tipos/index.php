<?php
/* @var $this TiposController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tiposes',
);

$this->menu=array(
	array('label'=>'Create Tipos', 'url'=>array('create')),
	array('label'=>'Manage Tipos', 'url'=>array('admin')),
);
?>

<h1>Tiposes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
