<?php
/* @var $this EntradasController */
/* @var $model Entradas */

$this->breadcrumbs=array(
	'Entradas'=>array('index'),
	$model->idEntradas=>array('view','id'=>$model->idEntradas),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Entradas', 'url'=>array('index')),
	array('label'=>'Crear Entradas', 'url'=>array('create')),
	array('label'=>'Ver Entradas', 'url'=>array('view', 'id'=>$model->idEntradas)),
	array('label'=>'Administrar Entradas', 'url'=>array('admin')),
);
?>

<h1>Editar Entradas <?php echo $model->idEntradas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>