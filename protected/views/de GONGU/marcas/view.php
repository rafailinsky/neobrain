<?php
/* @var $this MarcasController */
/* @var $model Marcas */

$this->breadcrumbs=array(
	'Marcases'=>array('index'),
	$model->idMarcas,
);

$this->menu=array(
	array('label'=>'List Marcas', 'url'=>array('index')),
	array('label'=>'Create Marcas', 'url'=>array('create')),
	array('label'=>'Update Marcas', 'url'=>array('update', 'id'=>$model->idMarcas)),
	array('label'=>'Delete Marcas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idMarcas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Marcas', 'url'=>array('admin')),
);
?>

<h1>View Marcas #<?php echo $model->idMarcas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idMarcas',
		'Nombre_Marcas',
	),
)); ?>
