<?php
/* @var $this SoportesController */
/* @var $model Soportes */

$this->breadcrumbs=array(
	'Soportes'=>array('index'),
	$model->idSoportes,
);

$this->menu=array(
	array('label'=>'List Soportes', 'url'=>array('index')),
	array('label'=>'Create Soportes', 'url'=>array('create')),
	array('label'=>'Update Soportes', 'url'=>array('update', 'id'=>$model->idSoportes)),
	array('label'=>'Delete Soportes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSoportes),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Soportes', 'url'=>array('admin')),
);
?>

<h1>View Soportes #<?php echo $model->idSoportes; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSoportes',
		'FechaIngreso_Soportes',
		'FechaEntrega_Soportes',
		'Observaciones_Cliente_Soportes',
		'Prediagnostico_Soportes',
		'Costo_Soportes',
		'Status_Soportes',
		'Clientes_idClientes_Soportes',
		'Servicios_idServicio_Soportes',
		'Equipos_idEquipos_Soportes',
		'Datos_Entrada_Soportes',
		'Partes_Dañadas_Soportes',
		'Fallas_Equipo_Soportes',
	),
)); ?>
