<?php
/* @var $this IglesiasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Iglesias',
);

$this->menu=array(
	array('label'=>'Crear Iglesias', 'url'=>array('create')),
	array('label'=>'Administrar Iglesias', 'url'=>array('admin')),
);
?>

<h2>Iglesias</h2>

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
