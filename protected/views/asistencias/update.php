<?php
/* @var $this AsistenciasController */
/* @var $model Asistencias */

$this->breadcrumbs=array(
	'Asistencias'=>array('index'),
	$model->idAsistencias=>array('view','id'=>$model->idAsistencias),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Mostrar', 'url'=>array('view', 'id'=>$model->idAsistencias)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Asistencias <?php echo $model->idAsistencias; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>