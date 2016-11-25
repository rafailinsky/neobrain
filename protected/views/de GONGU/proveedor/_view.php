<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProveedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProveedor), array('view', 'id'=>$data->idProveedor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empresa_Proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->Empresa_Proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion_Proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion_Proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Colonia_Proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->Colonia_Proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CP_Proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->CP_Proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo_Proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->Correo_Proveedor); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('RFC_Proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->RFC_Proveedor); ?>
	<br />

	*/ ?>

</div>