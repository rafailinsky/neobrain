<?php
/* @var $this TiposController */
/* @var $data Tipos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipos), array('view', 'id'=>$data->idTipos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Tipos')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Tipos); ?>
	<br />


</div>