<?php
/* @var $this SalonesController */
/* @var $model Salones */

$this->breadcrumbs=array(
	'Salones'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Salones', 'url'=>array('index')),
	array('label'=>'Crear Salones', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#salones-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Administrar Salones</h2>

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
	'id'=>'salones-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idSalones',
		'Nombre_Salones',
		'Direccion_Salones',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
