<?php
/* @var $this ClientesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clientes',
);

$this->menu=array(
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Manejar Clientes', 'url'=>array('admin')),
);
?>

<h2>Clientes</h2>

<?php $this->widget('ext.EListView.EListView', array(
	'dataProvider'=>$dataProvider,
  'itemView'=>'_view',
  'pageSize'=>'52',
  'itemsPerPageMenu'=>array(5,10,20,50,100,200,500),
  'itemsPerPageMenuItemOptionPrefix'=>'Ver',
  'itemsPerPageMenuItemOptionSufix'=>'por Pagina',
  'itemsPerPageMenuClass'=>'ippm',
  'scrollToItem'=>array('on'=>'MISMATCH', 'containerEntity'=>'body', 'itemClass'=>'view'),
  'renderMenuInAltDomElmWithID'=>false, //use and DOM ELEMENT ID IE "myID"
)); ?>
