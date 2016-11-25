<?php
/* @var $this EmpresasController */
/* @var $model Empresas */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->idEmpresas=>array('view','id'=>$model->idEmpresas),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Mostrar', 'url'=>array('view', 'id'=>$model->idEmpresas)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Empresas <?php echo $model->idEmpresas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>