<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idProveedor'); ?>
		<?php echo $form->textField($model,'idProveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Proveedor'); ?>
		<?php echo $form->textField($model,'Nombre_Proveedor',array('size'=>60,'maxlength'=>65)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Empresa_Proveedor'); ?>
		<?php echo $form->textField($model,'Empresa_Proveedor',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion_Proveedor'); ?>
		<?php echo $form->textField($model,'Direccion_Proveedor',array('size'=>55,'maxlength'=>55)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Colonia_Proveedor'); ?>
		<?php echo $form->textField($model,'Colonia_Proveedor',array('size'=>55,'maxlength'=>55)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CP_Proveedor'); ?>
		<?php echo $form->textField($model,'CP_Proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Correo_Proveedor'); ?>
		<?php echo $form->textField($model,'Correo_Proveedor',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RFC_Proveedor'); ?>
		<?php echo $form->textField($model,'RFC_Proveedor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->