<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idUsuarios'); ?>
		<?php echo $form->textField($model,'idUsuarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Usuarios'); ?>
		<?php echo $form->textField($model,'Nombre_Usuarios',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Identificacion_Usuarios'); ?>
		<?php echo $form->textField($model,'Identificacion_Usuarios',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email_Usuarios'); ?>
		<?php echo $form->textField($model,'Email_Usuarios',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status_Usuarios'); ?>
		<?php echo $form->textField($model,'Status_Usuarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Genero_Usuarios'); ?>
		<?php echo $form->textField($model,'Genero_Usuarios',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>445)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'session'); ?>
		<?php echo $form->textArea($model,'session',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->