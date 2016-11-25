<?php
/* @var $this EmpresasController */
/* @var $model Empresas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEmpresas'); ?>
		<?php echo $form->textField($model,'idEmpresas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Empresas'); ?>
		<?php echo $form->textField($model,'Nombre_Empresas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->