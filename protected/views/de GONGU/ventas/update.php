<?php
/* @var $this VentasController */
/* @var $model Ventas */

$this->breadcrumbs=array(
	'Ventases'=>array('index'),
	$model->idVentas=>array('view','id'=>$model->idVentas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ventas', 'url'=>array('index')),
	array('label'=>'Create Ventas', 'url'=>array('create')),
	array('label'=>'View Ventas', 'url'=>array('view', 'id'=>$model->idVentas)),
	array('label'=>'Manage Ventas', 'url'=>array('admin')),
);
?>

<h1>Update Ventas <?php echo $model->idVentas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>