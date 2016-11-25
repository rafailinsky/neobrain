<?php
/* @var $this IglesiasController */
/* @var $model Iglesias */

$this->breadcrumbs=array(
	'Iglesiases'=>array('index'),
	$model->idIglesias,
);

$this->menu=array(
	array('label'=>'Listar Iglesias', 'url'=>array('index')),
	array('label'=>'Crear Iglesias', 'url'=>array('create')),
	array('label'=>'Editar Iglesias', 'url'=>array('update', 'id'=>$model->idIglesias)),
	array('label'=>'Eliminar Iglesias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idIglesias),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Iglesias', 'url'=>array('admin')),
);
?>

<h2>Iglesia #<?php echo $model->idIglesias; ?>.- <?php echo $model->Nombre_Iglesias; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idIglesias',
		'Nombre_Iglesias',
		'Direccion_Iglesias',
	),
)); ?>
