<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
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
			'title'=>"Datos de Usuario",));?>

  	<table class="table table-hover">
      <caption></caption>
      <thead></thead>
      <tbody>

      	<tr>
          	<td><?php echo $form->labelEx($model,'Nombre_Usuarios'); ?></td>
            <td><?php echo $form->textField($model,'Nombre_Usuarios',array('size'=>45,'maxlength'=>45)); ?></td>
        </tr>

        <tr>
          	<td><?php echo $form->labelEx($model,'Identificacion_Usuarios'); ?></td>
            <td><?php echo $form->textField($model,'Identificacion_Usuarios',array('size'=>45,'maxlength'=>45)); ?></td>
        </tr>

        <tr>
          	<td><?php echo $form->labelEx($model,'Email_Usuarios'); ?></td>
            <td><?php echo $form->textField($model,'Email_Usuarios',array('size'=>45,'maxlength'=>45)); ?></td>
        </tr>

        <tr>
          	<td><?php echo $form->labelEx($model,'Status_Usuarios'); ?></td>
            <td><?php echo $form->textField($model,'Status_Usuarios'); ?></td>
        </tr>

         <tr>
          	<td><?php echo $form->labelEx($model,'Genero_Usuarios'); ?></td>
            <td><?php echo $form->textField($model,'Genero_Usuarios',array('size'=>45,'maxlength'=>45)); ?></td>
        </tr>

         <tr>
          	<td><?php echo $form->labelEx($model,'username'); ?></td>
            <td><?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>445)); ?></td>
        </tr>

         <tr>
          	<td><?php echo $form->labelEx($model,'password'); ?></td>
            <td><?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>445)); ?></td>
        </tr>

         <tr>
          	<td></td>
            <td></td>
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