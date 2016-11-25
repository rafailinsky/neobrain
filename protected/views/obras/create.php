<?php
/* @var $this ObrasController */
/* @var $model Obras */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Crear Obras</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>