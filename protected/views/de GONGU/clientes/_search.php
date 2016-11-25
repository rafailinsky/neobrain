<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idClientes'); ?>
		<?php echo $form->textField($model,'idClientes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RFC_Clientes'); ?>
		<?php echo $form->textField($model,'RFC_Clientes',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Clientes'); ?>
		<?php echo $form->textField($model,'Nombre_Clientes',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telefono_Clientes'); ?>
		<?php echo $form->textField($model,'Telefono_Clientes',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Celular_Clientes'); ?>
		<?php echo $form->textField($model,'Celular_Clientes',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Correo_Clientes'); ?>
		<?php echo $form->textField($model,'Correo_Clientes',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion_Clientes'); ?>
		<?php echo $form->textField($model,'Direccion_Clientes',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Colonia_Clientes'); ?>
		<?php echo $form->textField($model,'Colonia_Clientes',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CP_Clientes'); ?>
		<?php echo $form->textField($model,'CP_Clientes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ciudad_Clientes'); ?>
		<?php echo $form->textField($model,'Ciudad_Clientes',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estado_Clientes'); ?>
		<?php echo $form->textField($model,'Estado_Clientes',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Medio_Publicitario_Clientes'); ?>
		<?php echo $form->textField($model,'Medio_Publicitario_Clientes',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status_Clientes'); ?>
		<?php echo $form->textField($model,'Status_Clientes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->