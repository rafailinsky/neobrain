<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idProductos'); ?>
		<?php echo $form->textField($model,'idProductos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Imagen_Productos'); ?>
		<?php echo $form->textField($model,'Imagen_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Productoscol'); ?>
		<?php echo $form->textField($model,'Productoscol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->