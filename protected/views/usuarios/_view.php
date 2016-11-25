<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuarios')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUsuarios), array('view', 'id'=>$data->idUsuarios)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Usuarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Identificacion_Usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->Identificacion_Usuarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email_Usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->Email_Usuarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status_Usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->Status_Usuarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Genero_Usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->Genero_Usuarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session')); ?>:</b>
	<?php echo CHtml::encode($data->session); ?>
	<br />

	*/ ?>

</div>