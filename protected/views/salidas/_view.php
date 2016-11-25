<?php
/* @var $this SalidasController */
/* @var $data Salidas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSalidas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSalidas), array('view', 'id'=>$data->idSalidas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Salidas')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Salidas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora_Salidas')); ?>:</b>
	<?php echo CHtml::encode($data->Hora_Salidas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Imagen_Salidas')); ?>:</b>
	<?php echo CHtml::encode($data->Imagen_Salidas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empleados_idEmpleados_Salidas')); ?>:</b>
	<?php echo CHtml::encode($data->Empleados_idEmpleados_Salidas); ?>
	<br />


</div>