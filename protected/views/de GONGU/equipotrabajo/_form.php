<?php
/* @var $this EquipotrabajoController */
/* @var $model Equipotrabajo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'equipotrabajo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo'); ?>
		<?php echo $form->textField($model,'Tipo'); ?>
		<?php echo $form->error($model,'Tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Marca'); ?>
		<?php echo $form->textField($model,'Marca'); ?>
		<?php echo $form->error($model,'Marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Modelo'); ?>
		<?php echo $form->textField($model,'Modelo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Numero_Serie'); ?>
		<?php echo $form->textField($model,'Numero_Serie',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Numero_Serie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>245)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->