<?php
/* @var $this IglesiasController */
/* @var $model Iglesias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'iglesias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model, 'Por favor corrija los siguientes errores de registro.', ' ', array('class' => 'alert alert-error')); ?>

	<table>
     <thead>    
     </thead>
     <tfoot>
     </tfoot>
     <tbody>

     	<tr>
     	     <th scope="row"><?php echo $form->labelEx($model,'Nombre:'); ?></th>
             <td><?php echo $form->textField($model,'Nombre_Iglesias',array( 'style'=>'text-transform:uppercase;','placeholder'=>'Nombre de la Iglesia','size'=>45,'maxlength'=>45)); ?></td>
             <td> <?php echo $form->error($model,' '); ?></td>

             <th scope="row"><?php echo $form->labelEx($model,'Direccion:'); ?></th>
             <td><?php echo $form->textArea($model,'Direccion_Iglesias',array( 'style'=>'text-transform:uppercase;','placeholder'=>'Direccion Completa','size'=>60,'maxlength'=>245)); ?></td>
             <td> <?php echo $form->error($model,' '); ?></td>

        </tr>

	</tbody>
    </table>

	<div class="row buttons">
    <?php  echo CHtml::submitButton("Guardar", array
    ('class' => 'btn btn-info', 'name' => 'files', 'title' => 'Guardar nuevo CLIENTE'));?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- form -->