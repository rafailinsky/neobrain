<?php
/* @var $this IglesiasController */
/* @var $model Iglesias */

$this->breadcrumbs=array(
	'Iglesias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Iglesias', 'url'=>array('index')),
	array('label'=>'Administrar Iglesias', 'url'=>array('admin')),
);
?>

<h2>Crear Iglesias</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>