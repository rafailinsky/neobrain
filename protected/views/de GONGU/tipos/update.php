<?php
/* @var $this TiposController */
/* @var $model Tipos */

$this->breadcrumbs=array(
	'Tiposes'=>array('index'),
	$model->idTipos=>array('view','id'=>$model->idTipos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipos', 'url'=>array('index')),
	array('label'=>'Create Tipos', 'url'=>array('create')),
	array('label'=>'View Tipos', 'url'=>array('view', 'id'=>$model->idTipos)),
	array('label'=>'Manage Tipos', 'url'=>array('admin')),
);
?>

<h1>Update Tipos <?php echo $model->idTipos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>