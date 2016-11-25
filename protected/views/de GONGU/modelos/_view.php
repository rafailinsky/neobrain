<?php
/* @var $this ModelosController */
/* @var $data Modelos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idModelos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idModelos), array('view', 'id'=>$data->idModelos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Modelos')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Modelos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marcas_idMarcas_Modelos')); ?>:</b>
	<?php echo CHtml::encode($data->marcas_idMarcas_Modelos); ?>
	<br />


</div>