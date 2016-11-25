<?php
/* @var $this EquiposController */
/* @var $model Equipos */

$this->breadcrumbs=array(
	'Equiposes'=>array('index'),
	$model->idEquipos,
);

$this->menu=array(
	array('label'=>'List Equipos', 'url'=>array('index')),
	array('label'=>'Create Equipos', 'url'=>array('create')),
	array('label'=>'Update Equipos', 'url'=>array('update', 'id'=>$model->idEquipos)),
	array('label'=>'Delete Equipos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEquipos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Equipos', 'url'=>array('admin')),
);
?>

<h1>View Equipos #<?php echo $model->idEquipos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEquipos',
		'Caracteristicas_Equipos',
		'Numero_Serie_Equipos',
		'N_Serie_Cargador_Equipos',
		'Numero_Serie_Bateria_Equipos',
		'Status_Equipos',
		'Clientes_idClientes_Equipos',
		'Tipos_idTipos_Equipos',
		'Marcas_idMarcas_Equipos',
		'Modelos_idModelos_Equipos',
	),
)); ?>
