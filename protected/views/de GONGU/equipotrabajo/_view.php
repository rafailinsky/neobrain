<?php
/* @var $this EquipotrabajoController */
/* @var $data Equipotrabajo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idequipotrabajo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idequipotrabajo), array('view', 'id'=>$data->idequipotrabajo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Marca')); ?>:</b>
	<?php echo CHtml::encode($data->Marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Modelo')); ?>:</b>
	<?php echo CHtml::encode($data->Modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero_Serie')); ?>:</b>
	<?php echo CHtml::encode($data->Numero_Serie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />


</div>