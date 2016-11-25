<?php
/* @var $this EntradasController */
/* @var $model Entradas */

$this->breadcrumbs=array(
	'Entradases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Entradas', 'url'=>array('index')),
	array('label'=>'Manage Entradas', 'url'=>array('admin')),
);
?>

<h1>Create Entradas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>