<?php
/* @var $this PaquetesController */
/* @var $model Paquetes */

$this->breadcrumbs=array(
	'Paquetes'=>array('index'),
	$model->idPaquetes=>array('view','id'=>$model->idPaquetes),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Paquetes', 'url'=>array('index')),
	array('label'=>'Crear Paquetes', 'url'=>array('create')),
	array('label'=>'Mostrar Paquetes', 'url'=>array('view', 'id'=>$model->idPaquetes)),
	array('label'=>'Administrar Paquetes', 'url'=>array('admin')),
);
?>

<h2>Actualizar Paquete  <?php echo $model->idPaquetes; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>