<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modeloses'=>array('index'),
	$model->idModelos,
);

$this->menu=array(
	array('label'=>'List Modelos', 'url'=>array('index')),
	array('label'=>'Create Modelos', 'url'=>array('create')),
	array('label'=>'Update Modelos', 'url'=>array('update', 'id'=>$model->idModelos)),
	array('label'=>'Delete Modelos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idModelos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Modelos', 'url'=>array('admin')),
);
?>

<h1>View Modelos #<?php echo $model->idModelos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idModelos',
		'Nombre_Modelos',
		'marcas_idMarcas_Modelos',
	),
)); ?>
