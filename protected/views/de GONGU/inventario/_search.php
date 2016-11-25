<?php
/* @var $this InventarioController */
/* @var $model Inventario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idInventario'); ?>
		<?php echo $form->textField($model,'idInventario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hora_Inventario'); ?>
		<?php echo $form->textField($model,'Hora_Inventario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productos_idProductos_Inventario'); ?>
		<?php echo $form->textField($model,'productos_idProductos_Inventario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->