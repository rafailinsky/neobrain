<?php
/* @var $this EntradasController */
/* @var $model Entradas */

$this->breadcrumbs=array(
	'Entradases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Entradas', 'url'=>array('index')),
	array('label'=>'Administrar Entradas', 'url'=>array('admin')),
);
?>

<h1>Crear Entrada Reparacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>