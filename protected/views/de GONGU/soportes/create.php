<?php
/* @var $this SoportesController */
/* @var $model Soportes */

$this->breadcrumbs=array(
	'Soportes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Soportes', 'url'=>array('index')),
	array('label'=>'Manage Soportes', 'url'=>array('admin')),
);
?>

<h1>Create Soportes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>