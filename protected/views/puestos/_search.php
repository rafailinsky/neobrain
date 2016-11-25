<?php
/* @var $this PuestosController */
/* @var $model Puestos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPuestos'); ?>
		<?php echo $form->textField($model,'idPuestos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Puestos'); ?>
		<?php echo $form->textField($model,'Nombre_Puestos',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nivel_Puestos'); ?>
		<?php echo $form->textField($model,'Nivel_Puestos',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Departamento_Puestos'); ?>
		<?php echo $form->textField($model,'Departamento_Puestos',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sueldo_Puestos'); ?>
		<?php echo $form->textField($model,'Sueldo_Puestos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->