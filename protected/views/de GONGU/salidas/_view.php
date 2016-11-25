<?php
/* @var $this SalidasController */
/* @var $data Salidas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSalidas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSalidas), array('view', 'id'=>$data->idSalidas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Salida_Salidas')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Salida_Salidas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entradas_idEntradas')); ?>:</b>
	<?php echo CHtml::encode($data->entradas_idEntradas); ?>
	<br />


</div>