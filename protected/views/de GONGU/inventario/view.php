<?php
/* @var $this InventarioController */
/* @var $model Inventario */

$this->breadcrumbs=array(
	'Inventarios'=>array('index'),
	$model->idInventario,
);

$this->menu=array(
	array('label'=>'List Inventario', 'url'=>array('index')),
	array('label'=>'Create Inventario', 'url'=>array('create')),
	array('label'=>'Update Inventario', 'url'=>array('update', 'id'=>$model->idInventario)),
	array('label'=>'Delete Inventario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idInventario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inventario', 'url'=>array('admin')),
);
?>

<h1>View Inventario #<?php echo $model->idInventario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idInventario',
		'Hora_Inventario',
		'productos_idProductos_Inventario',
	),
)); ?>
