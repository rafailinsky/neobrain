<?php
/* @var $this EntradasController */
/* @var $data Entradas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEntradas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEntradas), array('view', 'id'=>$data->idEntradas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Ingreso_Entradas')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Ingreso_Entradas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Entrega_Entradas')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Entrega_Entradas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Observaciones_Cliente_Entradas')); ?>:</b>
	<?php echo CHtml::encode($data->Observaciones_Cliente_Entradas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Prediagnostico_Entradas')); ?>:</b>
	<?php echo CHtml::encode($data->Prediagnostico_Entradas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Datos_Entrada_Entradas')); ?>:</b>
	<?php echo CHtml::encode($data->Datos_Entrada_Entradas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Partes_Dañadas_Entradas')); ?>:</b>
	<?php echo CHtml::encode($data->Partes_Dañadas_Entradas); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Fallas_Equipo_Entradas')); ?>:</b>
	<?php echo CHtml::encode($data->Fallas_Equipo_Entradas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Equipos_idEquipos_Entradas')); ?>:</b>
	<?php echo CHtml::encode($data->Equipos_idEquipos_Entradas); ?>
	<br />

	*/ ?>

</div>