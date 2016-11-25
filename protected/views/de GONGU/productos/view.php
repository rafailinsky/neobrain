<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	$model->idProductos,
);

$this->menu=array(
	array('label'=>'List Productos', 'url'=>array('index')),
	array('label'=>'Create Productos', 'url'=>array('create')),
	array('label'=>'Update Productos', 'url'=>array('update', 'id'=>$model->idProductos)),
	array('label'=>'Delete Productos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProductos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Productos', 'url'=>array('admin')),
);
?>

<h1>View Productos #<?php echo $model->idProductos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idProductos',
		'Clave_Productos',
		'Nombre_Productos',
		'Descripcion_Productos',
		'Precio_Costo_Productos',
		'Precio_Venta_Productos',
		'Precio_Mayoreo_Productos',
		'Stock_Productos',
		'Proveedor_idProveedor_Productos',
	),
)); ?>
