<?php
/* @var $this EntradasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entradas',
);

$this->menu=array(
	array('label'=>'Crear Entradas', 'url'=>array('create')),
	array('label'=>'Administrar Entradas', 'url'=>array('admin')),
);
?>

<h2>Entradas</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
