<?php
/* @var $this ObrasController */
/* @var $model Obras */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	$model->idObras,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->idObras)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idObras),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Mostrar Obra #<?php echo $model->idObras; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idObras',
		'Nombre_Obras',
		'Empresas_idEmpresas_Obras',
	),
)); ?>
