<?php
/* @var $this ObrasController */
/* @var $model Obras */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obras-form',
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
			'title'=>"Obras",));?>

  	<table class="table table-hover">
      <caption></caption>
      <thead></thead>
      <tbody>
        <tr>
          	<td><?php echo $form->labelEx($model,'Nombre_Obras'); ?></td>      
	        <td><?php echo $form->textField($model,'Nombre_Obras',array('placeholder'=>'NOMBRE DE OBRA','size'=>45,'maxlength'=>45)); ?></td>
         </tr>
         <tr>
          	<td><?php echo $form->labelEx($model,'Empresas_idEmpresas_Obras'); ?></td>      
	        <td><?php echo $form->dropDownList($model,'Empresas_idEmpresas_Obras',CHtml::listData(Empresas::model()->findAll(),'idEmpresas','Nombre_Empresas'),array('empty'=>'Selecciona Empresa')); ?></td>
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

	
