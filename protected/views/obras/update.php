<?php
/* @var $this ObrasController */
/* @var $model Obras */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	$model->idObras=>array('view','id'=>$model->idObras),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Mostrar', 'url'=>array('view', 'id'=>$model->idObras)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Obras <?php echo $model->idObras; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>