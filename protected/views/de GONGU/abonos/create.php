<?php
/* @var $this AbonosController */
/* @var $model Abonos */

$this->breadcrumbs=array(
	'Abonoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Abonos', 'url'=>array('index')),
	array('label'=>'Manage Abonos', 'url'=>array('admin')),
);
?>

<h1>Create Abonos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>