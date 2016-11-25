<?php
/* @var $this SoportesController */
/* @var $data Soportes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSoportes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSoportes), array('view', 'id'=>$data->idSoportes)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaIngreso_Soportes')); ?>:</b>
	<?php echo CHtml::encode($data->FechaIngreso_Soportes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaEntrega_Soportes')); ?>:</b>
	<?php echo CHtml::encode($data->FechaEntrega_Soportes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Observaciones_Cliente_Soportes')); ?>:</b>
	<?php echo CHtml::encode($data->Observaciones_Cliente_Soportes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Prediagnostico_Soportes')); ?>:</b>
	<?php echo CHtml::encode($data->Prediagnostico_Soportes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Costo_Soportes')); ?>:</b>
	<?php echo CHtml::encode($data->Costo_Soportes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status_Soportes')); ?>:</b>
	<?php echo CHtml::encode($data->Status_Soportes); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Clientes_idClientes_Soportes')); ?>:</b>
	<?php echo CHtml::encode($data->Clientes_idClientes_Soportes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Servicios_idServicio_Soportes')); ?>:</b>
	<?php echo CHtml::encode($data->Servicios_idServicio_Soportes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Equipos_idEquipos_Soportes')); ?>:</b>
	<?php echo CHtml::encode($data->Equipos_idEquipos_Soportes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Datos_Entrada_Soportes')); ?>:</b>
	<?php echo CHtml::encode($data->Datos_Entrada_Soportes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Partes_Dañadas_Soportes')); ?>:</b>
	<?php echo CHtml::encode($data->Partes_Dañadas_Soportes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fallas_Equipo_Soportes')); ?>:</b>
	<?php echo CHtml::encode($data->Fallas_Equipo_Soportes); ?>
	<br />

	*/ ?>

</div>