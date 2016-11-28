<?php
/* @var $this AsistenciasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asistencias',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Asistencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
