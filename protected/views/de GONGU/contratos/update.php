<?php
/* @var $this ContratosController */
/* @var $model Contratos */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	$model->idContratos=>array('view','id'=>$model->idContratos),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Contratos', 'url'=>array('index')),
	array('label'=>'Crear Contratos', 'url'=>array('create')),
	array('label'=>'Ver Contratos', 'url'=>array('view', 'id'=>$model->idContratos)),
	array('label'=>'Admnistrar Contratos', 'url'=>array('admin')),
);
?>

<h1>Editar Contratos <?php echo $model->idContratos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>