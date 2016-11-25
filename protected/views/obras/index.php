<?php
/* @var $this ObrasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Obras',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Obras</h1>


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
