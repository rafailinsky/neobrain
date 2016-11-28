<?php
/* @var $this AsistenciasController */
/* @var $data Asistencias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAsistencias')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAsistencias), array('view', 'id'=>$data->idAsistencias)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Asistencias')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Asistencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora_Entrada_Asistencias')); ?>:</b>
	<?php echo CHtml::encode($data->Hora_Entrada_Asistencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora_Salida_Asistencias')); ?>:</b>
	<?php echo CHtml::encode($data->Hora_Salida_Asistencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empleados_idEmpleados_Asistencias')); ?>:</b>
	<?php echo CHtml::encode($data->Empleados_idEmpleados_Asistencias); ?>
	<br />


</div>