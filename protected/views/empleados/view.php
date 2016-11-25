<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->idEmpleados,
);

$this->menu=array(
	array('label'=>'Listar ', 'url'=>array('index')),
	array('label'=>'Crear ', 'url'=>array('create')),
	array('label'=>'Actualizar ', 'url'=>array('update', 'id'=>$model->idEmpleados)),
	array('label'=>'Eliminar ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEmpleados),'confirm'=>'¿Está seguro que desea borrar este elemento?')),
	array('label'=>'Administrar ', 'url'=>array('admin')),
);
?>

<h1>Mostrar Empleado: <?php echo $model->Nombres_Empleados.' '.$model->Apellido_Paterno_Empleados; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEmpleados',
		'RFCtxt_Empleados',
		'IMSStxt_Empleados',
		'CURPtxt_Empleados',
		'NUM_INFONAVIT_Empleados',
		'Nombres_Empleados',
		'Apellido_Paterno_Empleados',
		'Apellido_Materno_Empleados',
		'Genero_Empleados',
		'Status_Empleados',
		'Status_IMSS_Empleados',
		'Fotografia_Empleados',
		'CURPimg_Empleados',
		'INEimg_Empleados',
		'ActaNacimineto_Empleados',
		'ComprovanteDomicilio_Empleados',
		'IMSSimg_Empleados',
		'INFONAVITimg_Empleados',
		'Calle_Domicilio_Empleados',
		'Num_Domicilio_Empleados',
		'Colonia_Domicilio_Empleados',
		'Cod_Postal_Domicilio_Empleados',
		'Ciudad_Domicilio_Empleados',
		'Estado_Domicilio_Empleados',
		'Puestos_idPuestos_Empleados',
		'Obras_idObras_Empleados',
	),
)); ?>


