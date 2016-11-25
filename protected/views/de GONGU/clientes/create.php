<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h2>Crear Clinte</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>