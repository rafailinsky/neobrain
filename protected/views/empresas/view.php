<?php
/* @var $this EmpresasController */
/* @var $model Empresas */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->idEmpresas,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->idEmpresas)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEmpresas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Mostrar Empresas #<?php echo $model->idEmpresas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEmpresas',
		'Nombre_Empresas',
	),
)); ?>
