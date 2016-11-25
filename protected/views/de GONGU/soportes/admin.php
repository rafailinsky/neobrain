<?php
/* @var $this SoportesController */
/* @var $model Soportes */

$this->breadcrumbs=array(
	'Soportes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Soportes', 'url'=>array('index')),
	array('label'=>'Create Soportes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#soportes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Soportes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'soportes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idSoportes',
		'FechaIngreso_Soportes',
		'FechaEntrega_Soportes',
		'Observaciones_Cliente_Soportes',
		'Prediagnostico_Soportes',
		'Costo_Soportes',
		/*
		'Status_Soportes',
		'Clientes_idClientes_Soportes',
		'Servicios_idServicio_Soportes',
		'Equipos_idEquipos_Soportes',
		'Datos_Entrada_Soportes',
		'Partes_Dañadas_Soportes',
		'Fallas_Equipo_Soportes',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
