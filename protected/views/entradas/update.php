<?php
/* @var $this EntradasController */
/* @var $model Entradas */

$this->breadcrumbs=array(
	'Entradases'=>array('index'),
	$model->idEntradas=>array('view','id'=>$model->idEntradas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entradas', 'url'=>array('index')),
	array('label'=>'Create Entradas', 'url'=>array('create')),
	array('label'=>'View Entradas', 'url'=>array('view', 'id'=>$model->idEntradas)),
	array('label'=>'Manage Entradas', 'url'=>array('admin')),
);
?>

<h1>Update Entradas <?php echo $model->idEntradas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>