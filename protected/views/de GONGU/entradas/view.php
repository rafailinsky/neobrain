<?php
/* @var $this EntradasController */
/* @var $model Entradas */

$this->breadcrumbs=array(
	'Entradases'=>array('index'),
	$model->idEntradas,
);

$this->menu=array(
	array('label'=>'Listar Entradas', 'url'=>array('index')),
	array('label'=>'Crear Entradas', 'url'=>array('create')),
	array('label'=>'Editar Entradas', 'url'=>array('update', 'id'=>$model->idEntradas)),
	array('label'=>'Eliminar Entradas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEntradas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Entradas', 'url'=>array('admin')),
);
?>

<h1>Ver Entradas #<?php echo $model->idEntradas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEntradas',
		'Fecha_Ingreso_Entradas',
		'Fecha_Entrega_Entradas',
		'Observaciones_Cliente_Entradas',
		'Prediagnostico_Entradas',
		'Datos_Entrada_Entradas',
		'Partes_Dañadas_Entradas',
		'Fallas_Equipo_Entradas',
		'Equipos_idEquipos_Entradas',
	),
)); ?>
