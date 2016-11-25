<?php
/* @var $this AbonosController */
/* @var $model Abonos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'abonos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad_Abonos'); ?>
		<?php echo $form->textField($model,'Cantidad_Abonos',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'Cantidad_Abonos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Abonos'); ?>
		<?php echo $form->textField($model,'Fecha_Abonos'); ?>
		<?php echo $form->error($model,'Fecha_Abonos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->