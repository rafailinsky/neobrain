<?php
/* @var $this EntradasController */
/* @var $model Entradas */

$this->breadcrumbs=array(
	'Entradases'=>array('index'),
	$model->idEntradas,
);

$this->menu=array(
	array('label'=>'List Entradas', 'url'=>array('index')),
	array('label'=>'Create Entradas', 'url'=>array('create')),
	array('label'=>'Update Entradas', 'url'=>array('update', 'id'=>$model->idEntradas)),
	array('label'=>'Delete Entradas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEntradas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entradas', 'url'=>array('admin')),
);
?>

<h1>View Entradas #<?php echo $model->idEntradas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEntradas',
		'Fecha_Entradas',
		'Hora_Entradas',
		'Imagen_Entradas',
		'Empleados_idEmpleados_Entradas',
	),
)); ?>
