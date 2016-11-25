<?php
/* @var $this EquiposController */
/* @var $model Equipos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEquipos'); ?>
		<?php echo $form->textField($model,'idEquipos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Caracteristicas_Equipos'); ?>
		<?php echo $form->textField($model,'Caracteristicas_Equipos',array('size'=>60,'maxlength'=>245)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Numero_Serie_Equipos'); ?>
		<?php echo $form->textField($model,'Numero_Serie_Equipos',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'N_Serie_Cargador_Equipos'); ?>
		<?php echo $form->textField($model,'N_Serie_Cargador_Equipos',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Numero_Serie_Bateria_Equipos'); ?>
		<?php echo $form->textField($model,'Numero_Serie_Bateria_Equipos',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status_Equipos'); ?>
		<?php echo $form->textField($model,'Status_Equipos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Clientes_idClientes_Equipos'); ?>
		<?php echo $form->textField($model,'Clientes_idClientes_Equipos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipos_idTipos_Equipos'); ?>
		<?php echo $form->textField($model,'Tipos_idTipos_Equipos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Marcas_idMarcas_Equipos'); ?>
		<?php echo $form->textField($model,'Marcas_idMarcas_Equipos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Modelos_idModelos_Equipos'); ?>
		<?php echo $form->textField($model,'Modelos_idModelos_Equipos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->