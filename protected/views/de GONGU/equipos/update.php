<?php
/* @var $this EquiposController */
/* @var $model Equipos */

$this->breadcrumbs=array(
	'Equiposes'=>array('index'),
	$model->idEquipos=>array('view','id'=>$model->idEquipos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Equipos', 'url'=>array('index')),
	array('label'=>'Create Equipos', 'url'=>array('create')),
	array('label'=>'View Equipos', 'url'=>array('view', 'id'=>$model->idEquipos)),
	array('label'=>'Manage Equipos', 'url'=>array('admin')),
);
?>

<h1>Update Equipos <?php echo $model->idEquipos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>