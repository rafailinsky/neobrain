<?php
/* @var $this EquipotrabajoController */
/* @var $model Equipotrabajo */

$this->breadcrumbs=array(
	'Equipotrabajos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Equipotrabajo', 'url'=>array('index')),
	array('label'=>'Manage Equipotrabajo', 'url'=>array('admin')),
);
?>

<h1>Create Equipotrabajo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>