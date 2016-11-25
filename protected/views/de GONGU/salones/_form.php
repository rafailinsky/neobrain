<?php
/* @var $this SalonesController */
/* @var $model Salones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	)); ?>

		<p class="note">Los campos marcados con <span class="required">*</span> son requeridos.</p>

		<table>
    <thead>    
    </thead>
    <tfoot>
    </tfoot>
    <tbody>

    	<tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Nombre'); ?></th>
	        <td><?php echo $form->textField($model,'Nombre_Salones',array('placeholder'=>'Nombre de Salon','style'=>'text-transform:uppercase;','numerical','size'=>45,'maxlength'=>45)); ?></td>
	        <th><?php echo $form->error($model,'Nombre_Salones'); ?></th>
       
    		<th scope="row"><?php echo $form->labelEx($model,'Direccion'); ?></th>
	        <td><?php echo $form->textArea($model,'Direccion_Salones',array('placeholder'=>'Direccion','style'=>'text-transform:uppercase;','numerical','size'=>245,'maxlength'=>245)); ?></td>
	        <th><?php echo $form->error($model,'Direccion_Salones'); ?></th>
        </tr>

    </tbody>
    </table>
	
<div class="row buttons">
    <?php  echo CHtml::submitButton("Guardar", array
    ('class' => 'btn btn-info', 'name' => 'files', 'title' => 'Guardar nuevo SALON'));?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- form -->