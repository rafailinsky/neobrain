<?php
/* @var $this CajaController */
/* @var $model Caja */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCaja'); ?>
		<?php echo $form->textField($model,'idCaja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Movimiento_Caja'); ?>
		<?php echo $form->textField($model,'Movimiento_Caja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo_Caja'); ?>
		<?php echo $form->textField($model,'Tipo_Caja',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Monto_Caja'); ?>
		<?php echo $form->textField($model,'Monto_Caja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Caja'); ?>
		<?php echo $form->textField($model,'Fecha_Caja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hora_Caja'); ?>
		<?php echo $form->textField($model,'Hora_Caja'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->