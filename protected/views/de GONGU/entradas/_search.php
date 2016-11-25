<?php
/* @var $this EntradasController */
/* @var $model Entradas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEntradas'); ?>
		<?php echo $form->textField($model,'idEntradas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Ingreso_Entradas'); ?>
		<?php echo $form->textField($model,'Fecha_Ingreso_Entradas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Entrega_Entradas'); ?>
		<?php echo $form->textField($model,'Fecha_Entrega_Entradas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Observaciones_Cliente_Entradas'); ?>
		<?php echo $form->textField($model,'Observaciones_Cliente_Entradas',array('size'=>60,'maxlength'=>145)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Prediagnostico_Entradas'); ?>
		<?php echo $form->textField($model,'Prediagnostico_Entradas',array('size'=>60,'maxlength'=>245)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Datos_Entrada_Entradas'); ?>
		<?php echo $form->textField($model,'Datos_Entrada_Entradas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Partes_Dañadas_Entradas'); ?>
		<?php echo $form->textField($model,'Partes_Dañadas_Entradas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fallas_Equipo_Entradas'); ?>
		<?php echo $form->textField($model,'Fallas_Equipo_Entradas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Equipos_idEquipos_Entradas'); ?>
		<?php echo $form->textField($model,'Equipos_idEquipos_Entradas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->