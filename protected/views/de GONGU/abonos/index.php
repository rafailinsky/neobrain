<?php
/* @var $this AbonosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Abonoses',
);

$this->menu=array(
	array('label'=>'Create Abonos', 'url'=>array('create')),
	array('label'=>'Manage Abonos', 'url'=>array('admin')),
);
?>

<h1>Abonoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
