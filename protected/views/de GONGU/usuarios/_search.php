<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idUsuarios'); ?>
		<?php echo $form->textField($model,'idUsuarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Usuarios'); ?>
		<?php echo $form->textField($model,'Nombre_Usuarios',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Correo_Usuarios'); ?>
		<?php echo $form->textField($model,'Correo_Usuarios',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username_Usuarios'); ?>
		<?php echo $form->textField($model,'username_Usuarios',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'session_Usuarios'); ?>
		<?php echo $form->textArea($model,'session_Usuarios',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->