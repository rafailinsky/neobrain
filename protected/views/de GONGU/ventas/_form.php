<?php
/* @var $this VentasController */
/* @var $model Ventas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ventas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Fechas_Ventas'); ?>
		<?php echo $form->textField($model,'Fechas_Ventas'); ?>
		<?php echo $form->error($model,'Fechas_Ventas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productos_idProductos'); ?>
		<?php echo $form->textField($model,'productos_idProductos'); ?>
		<?php echo $form->error($model,'productos_idProductos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clientes_idClientes'); ?>
		<?php echo $form->textField($model,'clientes_idClientes'); ?>
		<?php echo $form->error($model,'clientes_idClientes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->