<?php
/* @var $this AsistenciasController */
/* @var $model Asistencias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asistencias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son requeridos.</p>
  <?php echo $form->errorSummary($model, 'Por favor corrija los siguientes errores de registro.', ' ', array('class' => 'alert alert-error')); ?>


<div class="row-fluid">
  <div class="span6">
  <?php $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"Datos Personales",));?>

  	<table class="table table-hover">
      <caption></caption>
      <thead></thead>
      <tbody>

         <tr>
            <td><?php echo $form->labelEx($model,'Fecha_Asistencias'); ?></td>
	        <td><?php echo $form->textField($model,'Fecha_Asistencias',array('readonly'=>"readonly",'value'=>date('Y-m-d'))); ?></td>
	     </tr>

	     <tr>
            <td><?php echo $form->labelEx($model,'Hora_Entrada_Asistencias'); ?></td>
	        <td><?php echo $form->textField($model,'Hora_Entrada_Asistencias',array('readonly'=>"readonly",'value'=>date('Y-m-d'))); ?></td>
	     </tr>

	     <tr>
            <td><?php echo $form->labelEx($model,'Hora_Salida_Asistencias'); ?></td>
	        <td><?php echo $form->textField($model,'Hora_Salida_Asistencias',array('readonly'=>"readonly",'value'=>date('h:m:s'))); ?></td>
	     </tr>

	     <tr>
            <td><?php echo $form->labelEx($model,'Empleados_idEmpleados_Asistencias'); ?></td>
	        <td><?php echo $form->textField($model,'Empleados_idEmpleados_Asistencias',array('readonly'=>"readonly")); ?></td>
	     </tr>
        
      </tbody>
    </table>

    <center><div class="row buttons">
    <?php  echo CHtml::submitButton("Guardar", array
    ('class' => 'btn btn-info', 'name' => 'files', 'title' => 'Guardar'));?>
  </div></center>

    <?php $this->endWidget();?>
  </div>





<?php $this->endWidget(); ?>

</div><!-- form -->