<?php
/* @var $this VentasController */
/* @var $data Ventas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idVentas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idVentas), array('view', 'id'=>$data->idVentas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fechas_Ventas')); ?>:</b>
	<?php echo CHtml::encode($data->Fechas_Ventas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productos_idProductos')); ?>:</b>
	<?php echo CHtml::encode($data->productos_idProductos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientes_idClientes')); ?>:</b>
	<?php echo CHtml::encode($data->clientes_idClientes); ?>
	<br />


</div>