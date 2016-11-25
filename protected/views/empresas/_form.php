<?php
/* @var $this EmpresasController */
/* @var $model Empresas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresas-form',
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
			'title'=>"Empresas",));?>

  	<table class="table table-hover">
      <caption></caption>
      <thead></thead>
      <tbody>
        <tr>
          	<td><?php echo $form->labelEx($model,'Nombre_Empresas'); ?></td>      
	        <td><?php echo $form->textField($model,'Nombre_Empresas',array('placeholder'=>'NOMBRE DE LA EMPRESA','size'=>45,'maxlength'=>45)); ?></td>
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