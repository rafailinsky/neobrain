<?php
/* @var $this ServiciosController */
/* @var $data Servicios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idservicios')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idservicios), array('view', 'id'=>$data->idservicios)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Servicios')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Servicios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion_Servicios')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion_Servicios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Costo_Servicios')); ?>:</b>
	<?php echo CHtml::encode($data->Costo_Servicios); ?>
	<br />


</div>