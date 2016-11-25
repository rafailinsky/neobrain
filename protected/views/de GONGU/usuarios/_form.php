<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_Usuarios'); ?>
		<?php echo $form->textField($model,'Nombre_Usuarios',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre_Usuarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo_Usuarios'); ?>
		<?php echo $form->textField($model,'Correo_Usuarios',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Correo_Usuarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username_Usuarios'); ?>
		<?php echo $form->textField($model,'username_Usuarios',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'username_Usuarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password_Usuarios'); ?>
		<?php echo $form->textField($model,'password_Usuarios',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password_Usuarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'session_Usuarios'); ?>
		<?php echo $form->textArea($model,'session_Usuarios',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'session_Usuarios'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->