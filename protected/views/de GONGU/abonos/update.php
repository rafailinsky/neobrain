<?php
/* @var $this AbonosController */
/* @var $model Abonos */

$this->breadcrumbs=array(
	'Abonoses'=>array('index'),
	$model->idAbonos=>array('view','id'=>$model->idAbonos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Abonos', 'url'=>array('index')),
	array('label'=>'Create Abonos', 'url'=>array('create')),
	array('label'=>'View Abonos', 'url'=>array('view', 'id'=>$model->idAbonos)),
	array('label'=>'Manage Abonos', 'url'=>array('admin')),
);
?>

<h1>Update Abonos <?php echo $model->idAbonos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>