<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProductos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProductos), array('view', 'id'=>$data->idProductos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Imagen_Productos')); ?>:</b>
	<?php echo CHtml::encode($data->Imagen_Productos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Productoscol')); ?>:</b>
	<?php echo CHtml::encode($data->Productoscol); ?>
	<br />


</div>