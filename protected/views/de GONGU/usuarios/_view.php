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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo_Usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->Correo_Usuarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username_Usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->username_Usuarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password_Usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->password_Usuarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session_Usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->session_Usuarios); ?>
	<br />


</div>