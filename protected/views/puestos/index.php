<?php
/* @var $this PuestosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Puestos',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Puestos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
