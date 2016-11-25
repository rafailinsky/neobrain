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
		<?php echo $form->label($model,'Clave_Productos'); ?>
		<?php echo $form->textField($model,'Clave_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Productos'); ?>
		<?php echo $form->textField($model,'Nombre_Productos',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion_Productos'); ?>
		<?php echo $form->textField($model,'Descripcion_Productos',array('size'=>60,'maxlength'=>145)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Precio_Costo_Productos'); ?>
		<?php echo $form->textField($model,'Precio_Costo_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Precio_Venta_Productos'); ?>
		<?php echo $form->textField($model,'Precio_Venta_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Precio_Mayoreo_Productos'); ?>
		<?php echo $form->textField($model,'Precio_Mayoreo_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Stock_Productos'); ?>
		<?php echo $form->textField($model,'Stock_Productos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Proveedor_idProveedor_Productos'); ?>
		<?php echo $form->textField($model,'Proveedor_idProveedor_Productos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->