<?php
/* @var $this EntradasController */
/* @var $model Entradas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entradas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Entradas'); ?>
		<?php echo $form->textField($model,'Fecha_Entradas',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Fecha_Entradas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Hora_Entradas'); ?>
		<?php echo $form->textField($model,'Hora_Entradas',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Hora_Entradas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Imagen_Entradas'); ?>
		<?php echo $form->textField($model,'Imagen_Entradas'); ?>
		<?php echo $form->error($model,'Imagen_Entradas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Empleados_idEmpleados_Entradas'); ?>
		<?php echo $form->textField($model,'Empleados_idEmpleados_Entradas'); ?>
		<?php echo $form->error($model,'Empleados_idEmpleados_Entradas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->