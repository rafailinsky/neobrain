<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Clave_Productos'); ?>
		<?php echo $form->textField($model,'Clave_Productos'); ?>
		<?php echo $form->error($model,'Clave_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_Productos'); ?>
		<?php echo $form->textField($model,'Nombre_Productos',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Nombre_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion_Productos'); ?>
		<?php echo $form->textField($model,'Descripcion_Productos',array('size'=>60,'maxlength'=>145)); ?>
		<?php echo $form->error($model,'Descripcion_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Precio_Costo_Productos'); ?>
		<?php echo $form->textField($model,'Precio_Costo_Productos'); ?>
		<?php echo $form->error($model,'Precio_Costo_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Precio_Venta_Productos'); ?>
		<?php echo $form->textField($model,'Precio_Venta_Productos'); ?>
		<?php echo $form->error($model,'Precio_Venta_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Precio_Mayoreo_Productos'); ?>
		<?php echo $form->textField($model,'Precio_Mayoreo_Productos'); ?>
		<?php echo $form->error($model,'Precio_Mayoreo_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Stock_Productos'); ?>
		<?php echo $form->textField($model,'Stock_Productos'); ?>
		<?php echo $form->error($model,'Stock_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Proveedor_idProveedor_Productos'); ?>
		<?php echo $form->textField($model,'Proveedor_idProveedor_Productos'); ?>
		<?php echo $form->error($model,'Proveedor_idProveedor_Productos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->