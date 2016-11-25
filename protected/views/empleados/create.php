<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Crear Empleados</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>