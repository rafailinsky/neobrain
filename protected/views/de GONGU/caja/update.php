<?php
/* @var $this CajaController */
/* @var $model Caja */

$this->breadcrumbs=array(
	'Cajas'=>array('index'),
	$model->idCaja=>array('view','id'=>$model->idCaja),
	'Update',
);

$this->menu=array(
	array('label'=>'List Caja', 'url'=>array('index')),
	array('label'=>'Create Caja', 'url'=>array('create')),
	array('label'=>'View Caja', 'url'=>array('view', 'id'=>$model->idCaja)),
	array('label'=>'Manage Caja', 'url'=>array('admin')),
);
?>

<h1>Update Caja <?php echo $model->idCaja; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>