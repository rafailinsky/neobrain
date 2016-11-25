<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	$model->idservicios=>array('view','id'=>$model->idservicios),
	'Update',
);

$this->menu=array(
	array('label'=>'List Servicios', 'url'=>array('index')),
	array('label'=>'Create Servicios', 'url'=>array('create')),
	array('label'=>'View Servicios', 'url'=>array('view', 'id'=>$model->idservicios)),
	array('label'=>'Manage Servicios', 'url'=>array('admin')),
);
?>

<h1>Update Servicios <?php echo $model->idservicios; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>