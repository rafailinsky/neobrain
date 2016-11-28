<?php
/* @var $this AsistenciasController */
/* @var $model Asistencias */

$this->breadcrumbs=array(
	'Asistencias'=>array('index'),
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
	$('#asistencias-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Asistencias</h1>

<p>
Puedes utilizar un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de los valores de búsqueda para especificar la forma en que la comparación debe hacerse.
</p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'asistencias-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Fecha_Asistencias',
		'Hora_Entrada_Asistencias',
		'Hora_Salida_Asistencias',
		'Empleados_idEmpleados_Asistencias',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
