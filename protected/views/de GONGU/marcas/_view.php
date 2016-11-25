<?php
/* @var $this MarcasController */
/* @var $data Marcas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idMarcas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idMarcas), array('view', 'id'=>$data->idMarcas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Marcas')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Marcas); ?>
	<br />


</div>