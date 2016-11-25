<?php
/* @var $this ContratosController */
/* @var $model Contratos */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Contratos', 'url'=>array('index')),
	array('label'=>'Crear Contratos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contratos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Administrar Contratos</h2>

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
	'id'=>'contratos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idContratos',
		'Fecha_Contratos',
		'Fecha_Entrega_Contratos',
		'Motivo_Contratos',
		'Hora_Inicio_Contratos',
		'Status_Contratos',
		'Clientes_idClientes_Contratos',
		/*
		'Fecha_Evento_Contratos',
		'Hora_Fin_Contratos',
		'Gasto_Adicional_Contratos',
		'Status_Contratos',
		'Observaciones_Contratos',
		'Clientes_idClientes_Contratos',
		'Iglesias_idIglesias_Contratos',
		'Paquetes_idPaquetes_Contratos',
		'Salones_idSalones_Contratos',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
