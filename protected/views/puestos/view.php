<?php
/* @var $this PuestosController */
/* @var $model Puestos */

$this->breadcrumbs=array(
	'Puestos'=>array('index'),
	$model->idPuestos,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->idPuestos)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPuestos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Mostrar Puestos #<?php echo $model->idPuestos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPuestos',
		'Nombre_Puestos',
		'Nivel_Puestos',
		'Departamento_Puestos',
		'Sueldo_Puestos',
	),
)); ?>
