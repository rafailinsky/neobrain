<?php
/* @var $this EquipotrabajoController */
/* @var $model Equipotrabajo */

$this->breadcrumbs=array(
	'Equipotrabajos'=>array('index'),
	$model->idequipotrabajo,
);

$this->menu=array(
	array('label'=>'List Equipotrabajo', 'url'=>array('index')),
	array('label'=>'Create Equipotrabajo', 'url'=>array('create')),
	array('label'=>'Update Equipotrabajo', 'url'=>array('update', 'id'=>$model->idequipotrabajo)),
	array('label'=>'Delete Equipotrabajo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idequipotrabajo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Equipotrabajo', 'url'=>array('admin')),
);
?>

<h1>View Equipotrabajo #<?php echo $model->idequipotrabajo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idequipotrabajo',
		'Tipo',
		'Marca',
		'Modelo',
		'Numero_Serie',
		'Descripcion',
	),
)); ?>
