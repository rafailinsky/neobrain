<?php
/* @var $this TiposController */
/* @var $model Tipos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTipos'); ?>
		<?php echo $form->textField($model,'idTipos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Tipos'); ?>
		<?php echo $form->textField($model,'Nombre_Tipos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->