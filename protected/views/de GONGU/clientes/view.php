<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->idClientes,
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Crear Clientes', 'url'=>array('create')),
	array('label'=>'Editar Clientes', 'url'=>array('update', 'id'=>$model->idClientes)),
	array('label'=>'Eliminar Clientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idClientes),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h2>Cliente #<?php echo $model->idClientes; ?>.- <?php echo $model->Nombre_Clientes; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idClientes',
		'RFC_Clientes',
		'Nombre_Clientes',
		'Telefono_Clientes',
		'Celular_Clientes',
		'Correo_Clientes',
		'Direccion_Clientes',
		'Colonia_Clientes',
		'CP_Clientes',
		'Ciudad_Clientes',
		'Estado_Clientes',
		'Medio_Publicitario_Clientes',
		'Status_Clientes',
	),
)); ?>
