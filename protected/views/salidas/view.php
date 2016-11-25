<?php
/* @var $this SalidasController */
/* @var $model Salidas */

$this->breadcrumbs=array(
	'Salidases'=>array('index'),
	$model->idSalidas,
);

$this->menu=array(
	array('label'=>'List Salidas', 'url'=>array('index')),
	array('label'=>'Create Salidas', 'url'=>array('create')),
	array('label'=>'Update Salidas', 'url'=>array('update', 'id'=>$model->idSalidas)),
	array('label'=>'Delete Salidas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSalidas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salidas', 'url'=>array('admin')),
);
?>

<h1>View Salidas #<?php echo $model->idSalidas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSalidas',
		'Fecha_Salidas',
		'Hora_Salidas',
		'Imagen_Salidas',
		'Empleados_idEmpleados_Salidas',
	),
)); ?>
