<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->idClientes=>array('view','id'=>$model->idClientes),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
	array('label'=>'Crear Clientes', 'url'=>array('create')),
	array('label'=>'Ver Clientes', 'url'=>array('view', 'id'=>$model->idClientes)),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h2>Actualizar Cliente - <?php echo $model->idClientes; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>