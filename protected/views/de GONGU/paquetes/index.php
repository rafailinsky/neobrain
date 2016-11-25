<?php
/* @var $this PaquetesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Paquetes',
);

$this->menu=array(
	array('label'=>'Crear Paquetes', 'url'=>array('create')),
	array('label'=>'Administrar Paquetes', 'url'=>array('admin')),
);
?>

<h2>Paquetes</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
