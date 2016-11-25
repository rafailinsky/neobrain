<?php
/* @var $this ServiciosController */
/* @var $model Servicios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idservicios'); ?>
		<?php echo $form->textField($model,'idservicios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Servicios'); ?>
		<?php echo $form->textField($model,'Nombre_Servicios',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion_Servicios'); ?>
		<?php echo $form->textField($model,'Descripcion_Servicios',array('size'=>60,'maxlength'=>245)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Costo_Servicios'); ?>
		<?php echo $form->textField($model,'Costo_Servicios'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->