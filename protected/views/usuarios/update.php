<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->idUsuarios=>array('view','id'=>$model->idUsuarios),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lisar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Mostrar', 'url'=>array('view', 'id'=>$model->idUsuarios)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Usuarios <?php echo $model->idUsuarios; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>