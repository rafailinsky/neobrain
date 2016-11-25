<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->idEmpleados=>array('view','id'=>$model->idEmpleados),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Mostrar', 'url'=>array('view', 'id'=>$model->idEmpleados)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Empleado: <?php echo $model->Nombres_Empleados.' '.$model->Apellido_Paterno_Empleados; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>