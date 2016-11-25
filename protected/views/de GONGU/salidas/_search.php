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
		<?php echo $form->label($model,'Fecha_Salida_Salidas'); ?>
		<?php echo $form->textField($model,'Fecha_Salida_Salidas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entradas_idEntradas'); ?>
		<?php echo $form->textField($model,'entradas_idEntradas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->