<?php
/* @var $this ServiciosController */
/* @var $model Servicios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servicios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_Servicios'); ?>
		<?php echo $form->textField($model,'Nombre_Servicios',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Nombre_Servicios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion_Servicios'); ?>
		<?php echo $form->textField($model,'Descripcion_Servicios',array('size'=>60,'maxlength'=>245)); ?>
		<?php echo $form->error($model,'Descripcion_Servicios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Costo_Servicios'); ?>
		<?php echo $form->textField($model,'Costo_Servicios'); ?>
		<?php echo $form->error($model,'Costo_Servicios'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->