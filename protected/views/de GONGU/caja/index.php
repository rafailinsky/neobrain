<?php
/* @var $this CajaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cajas',
);

$this->menu=array(
	array('label'=>'Create Caja', 'url'=>array('create')),
	array('label'=>'Manage Caja', 'url'=>array('admin')),
);
?>

<h1>Cajas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
