<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEmpleados'); ?>
		<?php echo $form->textField($model,'idEmpleados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RFCtxt_Empleados'); ?>
		<?php echo $form->textField($model,'RFCtxt_Empleados',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IMSStxt_Empleados'); ?>
		<?php echo $form->textField($model,'IMSStxt_Empleados',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CURPtxt_Empleados'); ?>
		<?php echo $form->textField($model,'CURPtxt_Empleados',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NUM_INFONAVIT_Empleados'); ?>
		<?php echo $form->textField($model,'NUM_INFONAVIT_Empleados',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombres_Empleados'); ?>
		<?php echo $form->textField($model,'Nombres_Empleados',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellido_Paterno_Empleados'); ?>
		<?php echo $form->textField($model,'Apellido_Paterno_Empleados',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellido_Materno_Empleados'); ?>
		<?php echo $form->textField($model,'Apellido_Materno_Empleados',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Genero_Empleados'); ?>
		<?php echo $form->textField($model,'Genero_Empleados',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status_Empleados'); ?>
		<?php echo $form->textField($model,'Status_Empleados',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status_IMSS_Empleados'); ?>
		<?php echo $form->textField($model,'Status_IMSS_Empleados',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fotografia_Empleados'); ?>
		<?php echo $form->textField($model,'Fotografia_Empleados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CURPimg_Empleados'); ?>
		<?php echo $form->textField($model,'CURPimg_Empleados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INEimg_Empleados'); ?>
		<?php echo $form->textField($model,'INEimg_Empleados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ActaNacimineto_Empleados'); ?>
		<?php echo $form->textField($model,'ActaNacimineto_Empleados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ComprovanteDomicilio_Empleados'); ?>
		<?php echo $form->textField($model,'ComprovanteDomicilio_Empleados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IMSSimg_Empleados'); ?>
		<?php echo $form->textField($model,'IMSSimg_Empleados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INFONAVITimg_Empleados'); ?>
		<?php echo $form->textField($model,'INFONAVITimg_Empleados',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Calle_Domicilio_Empleados'); ?>
		<?php echo $form->textField($model,'Calle_Domicilio_Empleados',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Num_Domicilio_Empleados'); ?>
		<?php echo $form->textField($model,'Num_Domicilio_Empleados',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Colonia_Domicilio_Empleados'); ?>
		<?php echo $form->textField($model,'Colonia_Domicilio_Empleados',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cod_Postal_Domicilio_Empleados'); ?>
		<?php echo $form->textField($model,'Cod_Postal_Domicilio_Empleados',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ciudad_Domicilio_Empleados'); ?>
		<?php echo $form->textField($model,'Ciudad_Domicilio_Empleados',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estado_Domicilio_Empleados'); ?>
		<?php echo $form->textField($model,'Estado_Domicilio_Empleados',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Puestos_idPuestos_Empleados'); ?>
		<?php echo $form->textField($model,'Puestos_idPuestos_Empleados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Obras_idObras_Empleados'); ?>
		<?php echo $form->textField($model,'Obras_idObras_Empleados'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->