<?php
/* @var $this EmpresasController */
/* @var $model Empresas */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
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
	$('#empresas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Empresases</h1>

<p>
Puedes utilizar un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de los valores de búsqueda para especificar la forma en que la comparación debe hacerse.
</p>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'empresas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idEmpresas',
		'Nombre_Empresas',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
