<?php
/* @var $this EmpresasController */
/* @var $model Empresas */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Crear Empresas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>