<?php
/* @var $this EquipotrabajoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Equipotrabajos',
);

$this->menu=array(
	array('label'=>'Create Equipotrabajo', 'url'=>array('create')),
	array('label'=>'Manage Equipotrabajo', 'url'=>array('admin')),
);
?>

<h1>Equipotrabajos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
