<?php
/* @var $this EquipotrabajoController */
/* @var $model Equipotrabajo */

$this->breadcrumbs=array(
	'Equipotrabajos'=>array('index'),
	$model->idequipotrabajo=>array('view','id'=>$model->idequipotrabajo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Equipotrabajo', 'url'=>array('index')),
	array('label'=>'Create Equipotrabajo', 'url'=>array('create')),
	array('label'=>'View Equipotrabajo', 'url'=>array('view', 'id'=>$model->idequipotrabajo)),
	array('label'=>'Manage Equipotrabajo', 'url'=>array('admin')),
);
?>

<h1>Update Equipotrabajo <?php echo $model->idequipotrabajo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>