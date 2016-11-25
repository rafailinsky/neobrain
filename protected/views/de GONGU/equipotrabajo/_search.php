<?php
/* @var $this EquipotrabajoController */
/* @var $model Equipotrabajo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idequipotrabajo'); ?>
		<?php echo $form->textField($model,'idequipotrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo'); ?>
		<?php echo $form->textField($model,'Tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Marca'); ?>
		<?php echo $form->textField($model,'Marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Modelo'); ?>
		<?php echo $form->textField($model,'Modelo',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Numero_Serie'); ?>
		<?php echo $form->textField($model,'Numero_Serie',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>245)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->