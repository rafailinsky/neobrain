<?php
/* @var $this CajaController */
/* @var $model Caja */

$this->breadcrumbs=array(
	'Cajas'=>array('index'),
	$model->idCaja,
);

$this->menu=array(
	array('label'=>'List Caja', 'url'=>array('index')),
	array('label'=>'Create Caja', 'url'=>array('create')),
	array('label'=>'Update Caja', 'url'=>array('update', 'id'=>$model->idCaja)),
	array('label'=>'Delete Caja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCaja),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Caja', 'url'=>array('admin')),
);
?>

<h1>View Caja #<?php echo $model->idCaja; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCaja',
		'Movimiento_Caja',
		'Tipo_Caja',
		'Monto_Caja',
		'Fecha_Caja',
		'Hora_Caja',
	),
)); ?>
