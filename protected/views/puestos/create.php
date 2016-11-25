<?php
/* @var $this PuestosController */
/* @var $model Puestos */

$this->breadcrumbs=array(
	'Puestos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Crear Puesto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>