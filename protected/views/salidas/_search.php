<?php
/* @var $this SalidasController */
/* @var $model Salidas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idSalidas'); ?>
		<?php echo $form->textField($model,'idSalidas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Salidas'); ?>
		<?php echo $form->textField($model,'Fecha_Salidas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hora_Salidas'); ?>
		<?php echo $form->textField($model,'Hora_Salidas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Imagen_Salidas'); ?>
		<?php echo $form->textField($model,'Imagen_Salidas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Empleados_idEmpleados_Salidas'); ?>
		<?php echo $form->textField($model,'Empleados_idEmpleados_Salidas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->