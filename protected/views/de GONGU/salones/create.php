<?php
/* @var $this SalonesController */
/* @var $model Salones */

$this->breadcrumbs=array(
	'Salones'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Salones', 'url'=>array('index')),
	array('label'=>'Administrar Salones', 'url'=>array('admin')),
);
?>

<h2>Crear Salones</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>