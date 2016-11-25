<?php
/* @var $this SoportesController */
/* @var $model Soportes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idSoportes'); ?>
		<?php echo $form->textField($model,'idSoportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaIngreso_Soportes'); ?>
		<?php echo $form->textField($model,'FechaIngreso_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaEntrega_Soportes'); ?>
		<?php echo $form->textField($model,'FechaEntrega_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Observaciones_Cliente_Soportes'); ?>
		<?php echo $form->textField($model,'Observaciones_Cliente_Soportes',array('size'=>60,'maxlength'=>145)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Prediagnostico_Soportes'); ?>
		<?php echo $form->textField($model,'Prediagnostico_Soportes',array('size'=>60,'maxlength'=>245)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Costo_Soportes'); ?>
		<?php echo $form->textField($model,'Costo_Soportes',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status_Soportes'); ?>
		<?php echo $form->textField($model,'Status_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Clientes_idClientes_Soportes'); ?>
		<?php echo $form->textField($model,'Clientes_idClientes_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Servicios_idServicio_Soportes'); ?>
		<?php echo $form->textField($model,'Servicios_idServicio_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Equipos_idEquipos_Soportes'); ?>
		<?php echo $form->textField($model,'Equipos_idEquipos_Soportes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Datos_Entrada_Soportes'); ?>
		<?php echo $form->textField($model,'Datos_Entrada_Soportes',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Partes_Dañadas_Soportes'); ?>
		<?php echo $form->textField($model,'Partes_Dañadas_Soportes',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fallas_Equipo_Soportes'); ?>
		<?php echo $form->textField($model,'Fallas_Equipo_Soportes',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->