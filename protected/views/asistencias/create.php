<?php
/* @var $this AsistenciasController */
/* @var $model Asistencias */

$this->breadcrumbs=array(
	'Asistenciases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Crear Asistencias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>