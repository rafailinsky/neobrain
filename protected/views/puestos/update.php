<?php
/* @var $this PuestosController */
/* @var $model Puestos */

$this->breadcrumbs=array(
	'Puestos'=>array('index'),
	$model->idPuestos=>array('view','id'=>$model->idPuestos),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Mostrar', 'url'=>array('view', 'id'=>$model->idPuestos)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Puestos <?php echo $model->idPuestos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>