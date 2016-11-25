<?php
/* @var $this CajaController */
/* @var $data Caja */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCaja')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCaja), array('view', 'id'=>$data->idCaja)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Movimiento_Caja')); ?>:</b>
	<?php echo CHtml::encode($data->Movimiento_Caja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_Caja')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo_Caja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Monto_Caja')); ?>:</b>
	<?php echo CHtml::encode($data->Monto_Caja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Caja')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Caja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora_Caja')); ?>:</b>
	<?php echo CHtml::encode($data->Hora_Caja); ?>
	<br />


</div>