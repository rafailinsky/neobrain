<?php
/* @var $this SalonesController */
/* @var $model Salones */

$this->breadcrumbs=array(
	'Salones'=>array('index'),
	$model->idSalones,
);

$this->menu=array(
	array('label'=>'Listar Salones', 'url'=>array('index')),
	array('label'=>'Crear Salones', 'url'=>array('create')),
	array('label'=>'Actualizar Salones', 'url'=>array('update', 'id'=>$model->idSalones)),
	array('label'=>'Eliminar Salones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSalones),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Salones', 'url'=>array('admin')),
);
?>

<h2>Mostrar Salon #<?php echo $model->idSalones; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSalones',
		'Nombre_Salones',
		'Direccion_Salones',
	),
)); ?>
