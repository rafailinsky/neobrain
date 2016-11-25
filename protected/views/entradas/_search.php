<?php
/* @var $this EntradasController */
/* @var $model Entradas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEntradas'); ?>
		<?php echo $form->textField($model,'idEntradas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Entradas'); ?>
		<?php echo $form->textField($model,'Fecha_Entradas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hora_Entradas'); ?>
		<?php echo $form->textField($model,'Hora_Entradas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Imagen_Entradas'); ?>
		<?php echo $form->textField($model,'Imagen_Entradas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Empleados_idEmpleados_Entradas'); ?>
		<?php echo $form->textField($model,'Empleados_idEmpleados_Entradas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->