<?php
/* @var $this AbonosController */
/* @var $model Abonos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idAbonos'); ?>
		<?php echo $form->textField($model,'idAbonos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cantidad_Abonos'); ?>
		<?php echo $form->textField($model,'Cantidad_Abonos',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Abonos'); ?>
		<?php echo $form->textField($model,'Fecha_Abonos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->