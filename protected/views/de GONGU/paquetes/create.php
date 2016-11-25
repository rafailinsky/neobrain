<?php
/* @var $this PaquetesController */
/* @var $model Paquetes */

$this->breadcrumbs=array(
	'Paquetes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Paquetes', 'url'=>array('index')),
	array('label'=>'Administrar Paquetes', 'url'=>array('admin')),
);
?>

<h2>Crear Paquetes</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>