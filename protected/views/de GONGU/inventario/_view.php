<?php
/* @var $this InventarioController */
/* @var $data Inventario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idInventario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idInventario), array('view', 'id'=>$data->idInventario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora_Inventario')); ?>:</b>
	<?php echo CHtml::encode($data->Hora_Inventario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productos_idProductos_Inventario')); ?>:</b>
	<?php echo CHtml::encode($data->productos_idProductos_Inventario); ?>
	<br />


</div>