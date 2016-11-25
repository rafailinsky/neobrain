<?php
/* @var $this ContratosController */
/* @var $model Contratos */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	$model->idContratos,
);

$this->menu=array(
	array('label'=>'Listar Contratos', 'url'=>array('index')),
	array('label'=>'Crear Contratos', 'url'=>array('create')),
	array('label'=>'Editar Contratos', 'url'=>array('update', 'id'=>$model->idContratos)),
	array('label'=>'Eliminar Contratos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idContratos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Contratos', 'url'=>array('admin')),
);
?>

<h1>Contrato #<?php echo $model->idContratos; ?>.- <?php echo $model->Motivo_Contratos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idContratos',
		'Fecha_Contratos',
		'Fecha_Evento_Contratos',
		'Fecha_Entrega_Contratos',
		'Motivo_Contratos',
		'Hora_Inicio_Contratos',
		'Hora_Fin_Contratos',
		'Gasto_Adicional_Contratos',
		'Status_Contratos',
		'Observaciones_Contratos',
		'Clientes_idClientes_Contratos',
		'Iglesias_idIglesias_Contratos',
		'Paquetes_idPaquetes_Contratos',
		'Salones_idSalones_Contratos',
	),
)); ?>
