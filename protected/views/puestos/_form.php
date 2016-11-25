<?php
/* @var $this PuestosController */
/* @var $model Puestos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'puestos-form',
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
			'title'=>"Datos",));?>

  	<table class="table table-hover">
      <caption></caption>
      <thead></thead>
      <tbody>
        <tr>
          	<td><?php echo $form->labelEx($model,'Nombre_Puestos'); ?></td>
            <td><?php echo $form->textField($model,'Nombre_Puestos',array('placeholder'=>'NOMBRE PUESTO','size'=>25,'maxlength'=>25)); ?></td>
         </tr>
         <tr>
          	<td><?php echo $form->labelEx($model,'Nivel_Puestos'); ?></td>
          <td><?php echo $form->dropDownList($model,'Nivel_Puestos',Puestos::getStatusNiveldePuesto()); ?></td>
        </tr>

        <tr>
          	<td><?php echo $form->labelEx($model,'Departamento_Puestos'); ?></td>
            <td><?php echo $form->textField($model,'Departamento_Puestos',array('placeholder'=>'DEPARTAMENTO PUESTO','size'=>25,'maxlength'=>25)); ?></td>
        </tr>
        <tr>
          	<td><?php echo $form->labelEx($model,'Sueldo_Puestos'); ?></td>
            <td>
             <?php echo '<div class="input-prepend">';?>
             <?php echo '<div class="input-append">';?>
             <?php echo '<span class="add-on">$</span>';?>
             <?php echo $form->textField($model,'Sueldo_Puestos',array('class'=>'input-medium','placeholder'=>'SUELDO PUESTO','size'=>9,'maxlength'=>15)); ?>
             <?php echo '<span class="add-on">.00</span>';?>
             <?php echo '</div>';?>
             <?php echo '</div>';?>
          </td>
        </tr>

        
        
        
      </tbody>
    </table>

    <div class="row buttons">
    <?php  echo CHtml::submitButton("Guardar", array
    ('class' => 'btn btn-info', 'name' => 'files', 'title' => 'Guardar'));?>
  </div>

    <?php $this->endWidget();?>
  </div>


<?php $this->endWidget(); ?>

</div><!-- form -->