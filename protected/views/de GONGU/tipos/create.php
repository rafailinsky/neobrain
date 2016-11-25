<?php
/* @var $this TiposController */
/* @var $model Tipos */

$this->breadcrumbs=array(
	'Tiposes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipos', 'url'=>array('index')),
	array('label'=>'Manage Tipos', 'url'=>array('admin')),
);
?>

<h1>Create Tipos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>