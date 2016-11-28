<?php
/* @var $this AsistenciasController */
/* @var $model Asistencias */

$this->breadcrumbs=array(
	'Asistencias'=>array('index'),
	$model->idAsistencias,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->idAsistencias)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAsistencias),'confirm'=>'¿Está seguro que desea borrar este elemento?')),
	array('label'=>'Administrar Asistencias', 'url'=>array('admin')),
);
?>

<h1>Mostrar Asistencia #<?php echo $model->idAsistencias; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAsistencias',
		'Fecha_Asistencias',
		'Hora_Entrada_Asistencias',
		'Hora_Salida_Asistencias',
		'Empleados_idEmpleados_Asistencias',
	),
)); ?>
