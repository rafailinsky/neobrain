<?php
/* @var $this SoportesController */
/* @var $model Soportes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'soportes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idSoportes'); ?>
		<?php echo $form->textField($model,'idSoportes'); ?>
		<?php echo $form->error($model,'idSoportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaIngreso_Soportes'); ?>
		<?php echo $form->textField($model,'FechaIngreso_Soportes'); ?>
		<?php echo $form->error($model,'FechaIngreso_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaEntrega_Soportes'); ?>
		<?php echo $form->textField($model,'FechaEntrega_Soportes'); ?>
		<?php echo $form->error($model,'FechaEntrega_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Observaciones_Cliente_Soportes'); ?>
		<?php echo $form->textField($model,'Observaciones_Cliente_Soportes',array('size'=>60,'maxlength'=>145)); ?>
		<?php echo $form->error($model,'Observaciones_Cliente_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Prediagnostico_Soportes'); ?>
		<?php echo $form->textField($model,'Prediagnostico_Soportes',array('size'=>60,'maxlength'=>245)); ?>
		<?php echo $form->error($model,'Prediagnostico_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Costo_Soportes'); ?>
		<?php echo $form->textField($model,'Costo_Soportes',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Costo_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status_Soportes'); ?>
		<?php echo $form->textField($model,'Status_Soportes'); ?>
		<?php echo $form->error($model,'Status_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clientes_idClientes_Soportes'); ?>
		<?php echo $form->textField($model,'Clientes_idClientes_Soportes'); ?>
		<?php echo $form->error($model,'Clientes_idClientes_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Servicios_idServicio_Soportes'); ?>
		<?php echo $form->textField($model,'Servicios_idServicio_Soportes'); ?>
		<?php echo $form->error($model,'Servicios_idServicio_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Equipos_idEquipos_Soportes'); ?>
		<?php echo $form->textField($model,'Equipos_idEquipos_Soportes'); ?>
		<?php echo $form->error($model,'Equipos_idEquipos_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Datos_Entrada_Soportes'); ?>
		<?php echo $form->textField($model,'Datos_Entrada_Soportes',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Datos_Entrada_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Partes_Dañadas_Soportes'); ?>
		<?php echo $form->textField($model,'Partes_Dañadas_Soportes',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Partes_Dañadas_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fallas_Equipo_Soportes'); ?>
		<?php echo $form->textField($model,'Fallas_Equipo_Soportes',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Fallas_Equipo_Soportes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->