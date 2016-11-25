<?php
/* @var $this SalonesController */
/* @var $model Salones */

$this->breadcrumbs=array(
	'Salones'=>array('index'),
	$model->idSalones=>array('view','id'=>$model->idSalones),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Salones', 'url'=>array('index')),
	array('label'=>'Crear Salones', 'url'=>array('create')),
	array('label'=>'Mostrar Salones', 'url'=>array('view', 'id'=>$model->idSalones)),
	array('label'=>'Administrar Salones', 'url'=>array('admin')),
);
?>

<h2>Actualizar Salones <?php echo $model->idSalones; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>