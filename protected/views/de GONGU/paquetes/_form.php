<?php
/* @var $this PaquetesController */
/* @var $model Paquetes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paquetes-form',
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
     		<th scope="row"> <?php echo $form->labelEx($model,'Nombre'); ?> </th>
            <td> <?php echo $form->textField($model,'Nombre_Paquetes',array('size'=>45,'maxlength'=>45)); ?> </td> 
		    <th> <?php echo $form->error($model,' '); ?> </td>
		    	

		  <th scope="row"><?php echo $form->labelEx($model,'Costo'); ?></th>
          <td>
             <?php echo '<div class="input-prepend">';?>
             <?php echo '<div class="input-append">';?>
             <?php echo '<span class="add-on">$</span>';?>
             <?php echo $form->textField($model,'Costo_Paquetes',array('class'=>'input-medium','placeholder'=>'Costos','size'=>11,'maxlength'=>11)); ?>
             <?php echo '<span class="add-on">.00</span>';?>
             <?php echo '</div>';?>
             <?php echo '</div>';?>
          </td>
          <th><?php echo $form->error($model,' '); ?></th>



		    <th scope="row"> <?php echo $form->labelEx($model,'Contenido'); ?> </th>
            <td> <?php echo $form->textArea($model,'Contenido_Paquetes',array('size'=>10,'maxlength'=>11)); ?> </td> 
		    <th> <?php echo $form->error($model,' '); ?> </td>

		    

		</tr>

	</tbody>
    </table>


	<div class="row buttons">
    <?php  echo CHtml::submitButton("Guardar", array
    ('class' => 'btn btn-info', 'name' => 'files', 'title' => 'Guardar nuevo CLIENTE'));?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- form -->