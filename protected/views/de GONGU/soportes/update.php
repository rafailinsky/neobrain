<?php
/* @var $this SoportesController */
/* @var $model Soportes */

$this->breadcrumbs=array(
	'Soportes'=>array('index'),
	$model->idSoportes=>array('view','id'=>$model->idSoportes),
	'Update',
);

$this->menu=array(
	array('label'=>'List Soportes', 'url'=>array('index')),
	array('label'=>'Create Soportes', 'url'=>array('create')),
	array('label'=>'View Soportes', 'url'=>array('view', 'id'=>$model->idSoportes)),
	array('label'=>'Manage Soportes', 'url'=>array('admin')),
);
?>

<h1>Update Soportes <?php echo $model->idSoportes; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>