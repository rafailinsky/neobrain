<?php
/* @var $this EntradasController */
/* @var $model Entradas */

$this->breadcrumbs=array(
	'Entradas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Entradas', 'url'=>array('index')),
	array('label'=>'Creaar Entradas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#entradas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Administrar Entradas</h2>

<p>
Puedes introducir opcionalmente un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de los valores de búsqueda para especificar la forma en que la comparación debe hacerse.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'entradas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idEntradas',
		'Fecha_Ingreso_Entradas',
		'Fecha_Entrega_Entradas',
		'Observaciones_Cliente_Entradas',
		'Prediagnostico_Entradas',
		'Datos_Entrada_Entradas',
		/*
		'Partes_Dañadas_Entradas',
		'Fallas_Equipo_Entradas',
		'Equipos_idEquipos_Entradas',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
