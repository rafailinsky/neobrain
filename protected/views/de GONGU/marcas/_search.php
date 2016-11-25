<?php
/* @var $this MarcasController */
/* @var $model Marcas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idMarcas'); ?>
		<?php echo $form->textField($model,'idMarcas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Marcas'); ?>
		<?php echo $form->textField($model,'Nombre_Marcas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->