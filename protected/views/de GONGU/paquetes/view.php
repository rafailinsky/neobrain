<?php
/* @var $this PaquetesController */
/* @var $model Paquetes */

$this->breadcrumbs=array(
	'Paquetes'=>array('index'),
	$model->idPaquetes,
);

$this->menu=array(
	array('label'=>'Listar Paquetes', 'url'=>array('index')),
	array('label'=>'Crear Paquetes', 'url'=>array('create')),
	array('label'=>'Actualizar Paquetes', 'url'=>array('update', 'id'=>$model->idPaquetes)),
	array('label'=>'Eliminar Paquetes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPaquetes),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Paquetes', 'url'=>array('admin')),
);
?>

<h2>Mostrar Paquete #<?php echo $model->idPaquetes; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPaquetes',
		'Nombre_Paquetes',
		'Contenido_Paquetes',
		'Costo_Paquetes',
	),
)); ?>
