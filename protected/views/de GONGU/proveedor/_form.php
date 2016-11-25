<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_Proveedor'); ?>
		<?php echo $form->textField($model,'Nombre_Proveedor',array('size'=>60,'maxlength'=>65)); ?>
		<?php echo $form->error($model,'Nombre_Proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Empresa_Proveedor'); ?>
		<?php echo $form->textField($model,'Empresa_Proveedor',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'Empresa_Proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion_Proveedor'); ?>
		<?php echo $form->textField($model,'Direccion_Proveedor',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'Direccion_Proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Colonia_Proveedor'); ?>
		<?php echo $form->textField($model,'Colonia_Proveedor',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'Colonia_Proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CP_Proveedor'); ?>
		<?php echo $form->textField($model,'CP_Proveedor'); ?>
		<?php echo $form->error($model,'CP_Proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo_Proveedor'); ?>
		<?php echo $form->textField($model,'Correo_Proveedor',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Correo_Proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RFC_Proveedor'); ?>
		<?php echo $form->textField($model,'RFC_Proveedor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RFC_Proveedor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->