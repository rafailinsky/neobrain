<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modeloses'=>array('index'),
	$model->idModelos=>array('view','id'=>$model->idModelos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Modelos', 'url'=>array('index')),
	array('label'=>'Create Modelos', 'url'=>array('create')),
	array('label'=>'View Modelos', 'url'=>array('view', 'id'=>$model->idModelos)),
	array('label'=>'Manage Modelos', 'url'=>array('admin')),
);
?>

<h1>Update Modelos <?php echo $model->idModelos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>