<?php
/* @var $this CajaController */
/* @var $model Caja */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'caja-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Movimiento_Caja'); ?>
		<?php echo $form->textField($model,'Movimiento_Caja'); ?>
		<?php echo $form->error($model,'Movimiento_Caja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo_Caja'); ?>
		<?php echo $form->textField($model,'Tipo_Caja',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Tipo_Caja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Monto_Caja'); ?>
		<?php echo $form->textField($model,'Monto_Caja'); ?>
		<?php echo $form->error($model,'Monto_Caja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Caja'); ?>
		<?php echo $form->textField($model,'Fecha_Caja'); ?>
		<?php echo $form->error($model,'Fecha_Caja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Hora_Caja'); ?>
		<?php echo $form->textField($model,'Hora_Caja'); ?>
		<?php echo $form->error($model,'Hora_Caja'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->