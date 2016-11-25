<?php
/* @var $this IglesiasController */
/* @var $model Iglesias */

$this->breadcrumbs=array(
	'Iglesias'=>array('index'),
	$model->idIglesias=>array('view','id'=>$model->idIglesias),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Iglesias', 'url'=>array('index')),
	array('label'=>'Crear Iglesias', 'url'=>array('create')),
	array('label'=>'Ver Iglesias', 'url'=>array('view', 'id'=>$model->idIglesias)),
	array('label'=>'Administrar Iglesias', 'url'=>array('admin')),
);
?>

<h2>Editar Iglesia <?php echo $model->idIglesias; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>