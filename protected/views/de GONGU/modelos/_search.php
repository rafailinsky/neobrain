<?php
/* @var $this ModelosController */
/* @var $model Modelos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idModelos'); ?>
		<?php echo $form->textField($model,'idModelos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Modelos'); ?>
		<?php echo $form->textField($model,'Nombre_Modelos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marcas_idMarcas_Modelos'); ?>
		<?php echo $form->textField($model,'marcas_idMarcas_Modelos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->