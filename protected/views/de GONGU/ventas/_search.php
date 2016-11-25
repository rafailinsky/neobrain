<?php
/* @var $this VentasController */
/* @var $model Ventas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idVentas'); ?>
		<?php echo $form->textField($model,'idVentas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fechas_Ventas'); ?>
		<?php echo $form->textField($model,'Fechas_Ventas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productos_idProductos'); ?>
		<?php echo $form->textField($model,'productos_idProductos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientes_idClientes'); ?>
		<?php echo $form->textField($model,'clientes_idClientes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->