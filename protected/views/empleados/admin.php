<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#empleados-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Empleados</h1>

<p>
Puedes utilizar un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de los valores de búsqueda para especificar la forma en que la comparación debe hacerse.
</p>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'empleados-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'RFCtxt_Empleados',
		'IMSStxt_Empleados',
		'Nombres_Empleados',
		'Apellido_Paterno_Empleados',
		/*
		'CURPtxt_Empleados',
		'NUM_INFONAVIT_Empleados',
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
