<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Servicios', 'url'=>array('index')),
	array('label'=>'Manage Servicios', 'url'=>array('admin')),
);
?>

<h1>Create Servicios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>