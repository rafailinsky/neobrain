<?php
/* @var $this TiposController */
/* @var $model Tipos */

$this->breadcrumbs=array(
	'Tiposes'=>array('index'),
	$model->idTipos,
);

$this->menu=array(
	array('label'=>'List Tipos', 'url'=>array('index')),
	array('label'=>'Create Tipos', 'url'=>array('create')),
	array('label'=>'Update Tipos', 'url'=>array('update', 'id'=>$model->idTipos)),
	array('label'=>'Delete Tipos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipos', 'url'=>array('admin')),
);
?>

<h1>View Tipos #<?php echo $model->idTipos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipos',
		'Nombre_Tipos',
	),
)); ?>
