<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProductos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProductos), array('view', 'id'=>$data->idProductos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clave_Productos')); ?>:</b>
	<?php echo CHtml::encode($data->Clave_Productos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Productos')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Productos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion_Productos')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion_Productos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Precio_Costo_Productos')); ?>:</b>
	<?php echo CHtml::encode($data->Precio_Costo_Productos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Precio_Venta_Productos')); ?>:</b>
	<?php echo CHtml::encode($data->Precio_Venta_Productos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Precio_Mayoreo_Productos')); ?>:</b>
	<?php echo CHtml::encode($data->Precio_Mayoreo_Productos); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Stock_Productos')); ?>:</b>
	<?php echo CHtml::encode($data->Stock_Productos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Proveedor_idProveedor_Productos')); ?>:</b>
	<?php echo CHtml::encode($data->Proveedor_idProveedor_Productos); ?>
	<br />

	*/ ?>

</div>