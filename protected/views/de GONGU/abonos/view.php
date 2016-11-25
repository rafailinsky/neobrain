<?php
/* @var $this AbonosController */
/* @var $model Abonos */

$this->breadcrumbs=array(
	'Abonoses'=>array('index'),
	$model->idAbonos,
);

$this->menu=array(
	array('label'=>'List Abonos', 'url'=>array('index')),
	array('label'=>'Create Abonos', 'url'=>array('create')),
	array('label'=>'Update Abonos', 'url'=>array('update', 'id'=>$model->idAbonos)),
	array('label'=>'Delete Abonos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAbonos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Abonos', 'url'=>array('admin')),
);
?>

<h1>View Abonos #<?php echo $model->idAbonos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAbonos',
		'Cantidad_Abonos',
		'Fecha_Abonos',
	),
)); ?>
