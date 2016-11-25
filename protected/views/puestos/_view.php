<?php
/* @var $this PuestosController */
/* @var $data Puestos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPuestos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPuestos), array('view', 'id'=>$data->idPuestos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Puestos')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Puestos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nivel_Puestos')); ?>:</b>
	<?php echo CHtml::encode($data->Nivel_Puestos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Departamento_Puestos')); ?>:</b>
	<?php echo CHtml::encode($data->Departamento_Puestos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sueldo_Puestos')); ?>:</b>
	<?php echo CHtml::encode($data->Sueldo_Puestos); ?>
	<br />


</div>