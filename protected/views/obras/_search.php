<?php
/* @var $this ObrasController */
/* @var $model Obras */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idObras'); ?>
		<?php echo $form->textField($model,'idObras'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Obras'); ?>
		<?php echo $form->textField($model,'Nombre_Obras',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Empresas_idEmpresas_Obras'); ?>
		<?php echo $form->textField($model,'Empresas_idEmpresas_Obras'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->