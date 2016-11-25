<?php
/* @var $this PaquetesController */
/* @var $model Paquetes */

$this->breadcrumbs=array(
	'Paquetes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Paquetes', 'url'=>array('index')),
	array('label'=>'Crear Paquetes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#paquetes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Administrar Paquetes</h2>

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
	'id'=>'paquetes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idPaquetes',
		'Nombre_Paquetes',
		'Contenido_Paquetes',
		'Costo_Paquetes',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
