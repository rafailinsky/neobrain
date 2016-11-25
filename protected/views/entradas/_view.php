<?php
/* @var $this EntradasController */
/* @var $data Entradas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEntradas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEntradas), array('view', 'id'=>$data->idEntradas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Entradas')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Entradas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora_Entradas')); ?>:</b>
	<?php echo CHtml::encode($data->Hora_Entradas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Imagen_Entradas')); ?>:</b>
	<?php echo CHtml::encode($data->Imagen_Entradas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empleados_idEmpleados_Entradas')); ?>:</b>
	<?php echo CHtml::encode($data->Empleados_idEmpleados_Entradas); ?>
	<br />


</div>