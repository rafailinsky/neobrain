<?php
/* @var $this ObrasController */
/* @var $data Obras */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Obras')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Obras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empresas_idEmpresas_Obras')); ?>:</b>
	<?php echo CHtml::encode($data->Empresas_idEmpresas_Obras); ?>
	<br />


</div>