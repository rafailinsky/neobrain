<?php
/* @var $this AsistenciasController */
/* @var $model Asistencias */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idAsistencias'); ?>
		<?php echo $form->textField($model,'idAsistencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Asistencias'); ?>
		<?php echo $form->textField($model,'Fecha_Asistencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hora_Entrada_Asistencias'); ?>
		<?php echo $form->textField($model,'Hora_Entrada_Asistencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hora_Salida_Asistencias'); ?>
		<?php echo $form->textField($model,'Hora_Salida_Asistencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Empleados_idEmpleados_Asistencias'); ?>
		<?php echo $form->textField($model,'Empleados_idEmpleados_Asistencias'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->