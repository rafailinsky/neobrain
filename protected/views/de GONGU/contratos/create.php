<?php
/* @var $this ContratosController */
/* @var $model Contratos */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Contratos', 'url'=>array('index')),
	array('label'=>'Administrar Contratos', 'url'=>array('admin')),
);
?>

<h2>Crear Contrato</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>