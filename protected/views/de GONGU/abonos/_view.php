<?php
/* @var $this AbonosController */
/* @var $data Abonos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAbonos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAbonos), array('view', 'id'=>$data->idAbonos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad_Abonos')); ?>:</b>
	<?php echo CHtml::encode($data->Cantidad_Abonos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Abonos')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Abonos); ?>
	<br />


</div>