<?php
/* @var $this ContratosController */


$this->breadcrumbs=array(
	'Contratos',
);

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 


$this->menu=array(
	array('label'=>'Crear Contratos', 'url'=>array('create')),
	array('label'=>'Administrar Contratos', 'url'=>array('admin')),
);
?>

<h2>Contratos</h2>

<?php $this->widget('ext.EListView.EListView', array(
	'dataProvider'=>$dataProvider,
  'itemView'=>'_view',
  'pageSize'=>'5',
  'itemsPerPageMenu'=>array(5,10,20,50,100,200,500),
  'itemsPerPageMenuItemOptionPrefix'=>'Ver',
  'itemsPerPageMenuItemOptionSufix'=>'por Pagina',
  'itemsPerPageMenuClass'=>'ippm',
  'scrollToItem'=>array('on'=>'MISMATCH', 'containerEntity'=>'body', 'itemClass'=>'view'),
  'renderMenuInAltDomElmWithID'=>false, //use and DOM ELEMENT ID IE "myID"
)); ?>
