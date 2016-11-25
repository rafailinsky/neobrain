<?php
/* @var $this VentasController */
/* @var $model Ventas */

$this->breadcrumbs=array(
	'Ventases'=>array('index'),
	$model->idVentas,
);

$this->menu=array(
	array('label'=>'List Ventas', 'url'=>array('index')),
	array('label'=>'Create Ventas', 'url'=>array('create')),
	array('label'=>'Update Ventas', 'url'=>array('update', 'id'=>$model->idVentas)),
	array('label'=>'Delete Ventas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idVentas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ventas', 'url'=>array('admin')),
);
?>

<h1>View Ventas #<?php echo $model->idVentas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idVentas',
		'Fechas_Ventas',
		'productos_idProductos',
		'clientes_idClientes',
	),
)); ?>
