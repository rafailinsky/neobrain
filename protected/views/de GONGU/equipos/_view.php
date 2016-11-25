<?php
/* @var $this EquiposController */
/* @var $data Equipos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEquipos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEquipos), array('view', 'id'=>$data->idEquipos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Caracteristicas_Equipos')); ?>:</b>
	<?php echo CHtml::encode($data->Caracteristicas_Equipos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero_Serie_Equipos')); ?>:</b>
	<?php echo CHtml::encode($data->Numero_Serie_Equipos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('N_Serie_Cargador_Equipos')); ?>:</b>
	<?php echo CHtml::encode($data->N_Serie_Cargador_Equipos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero_Serie_Bateria_Equipos')); ?>:</b>
	<?php echo CHtml::encode($data->Numero_Serie_Bateria_Equipos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status_Equipos')); ?>:</b>
	<?php echo CHtml::encode($data->Status_Equipos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clientes_idClientes_Equipos')); ?>:</b>
	<?php echo CHtml::encode($data->Clientes_idClientes_Equipos); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipos_idTipos_Equipos')); ?>:</b>
	<?php echo CHtml::encode($data->Tipos_idTipos_Equipos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Marcas_idMarcas_Equipos')); ?>:</b>
	<?php echo CHtml::encode($data->Marcas_idMarcas_Equipos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Modelos_idModelos_Equipos')); ?>:</b>
	<?php echo CHtml::encode($data->Modelos_idModelos_Equipos); ?>
	<br />

	*/ ?>

</div>