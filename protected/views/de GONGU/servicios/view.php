<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	$model->idservicios,
);

$this->menu=array(
	array('label'=>'List Servicios', 'url'=>array('index')),
	array('label'=>'Create Servicios', 'url'=>array('create')),
	array('label'=>'Update Servicios', 'url'=>array('update', 'id'=>$model->idservicios)),
	array('label'=>'Delete Servicios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idservicios),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Servicios', 'url'=>array('admin')),
);
?>

<h1>View Servicios #<?php echo $model->idservicios; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idservicios',
		'Nombre_Servicios',
		'Descripcion_Servicios',
		'Costo_Servicios',
	),
)); ?>
