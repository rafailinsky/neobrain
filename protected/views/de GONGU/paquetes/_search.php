<?php
/* @var $this PaquetesController */
/* @var $model Paquetes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<table>
     <thead>    
     </thead>
     <tfoot>
     </tfoot>
     <tbody>

     	<tr>
     		<th scope="row"> <?php echo $form->label($model,'idPaquetes'); ?> </th>
            <td> <?php echo $form->textField($model,'idPaquetes'); ?> </td> 

            <th scope="row"> <?php echo $form->label($model,'Nombre_Paquetes'); ?> </th>
            <td> <?php echo $form->textField($model,'Nombre_Paquetes',array('size'=>45,'maxlength'=>45)); ?> </td> 

            <th scope="row"> <?php echo $form->label($model,'Contenido_Paquetes'); ?> </th>
            <td> <?php echo $form->textField($model,'Contenido_Paquetes',array('size'=>60,'maxlength'=>245)); ?> </td> 

            <th scope="row"> <?php echo $form->label($model,'Costo_Paquetes'); ?> </th>
            <td> <?php echo $form->textField($model,'Costo_Paquetes'); ?> </td> 
		</tr>

	</tbody>
    </table>


	<div class="row buttons">
    <?php  echo CHtml::submitButton("Buscar", array
    ('class' => 'btn btn-info', 'name' => 'files', 'title' => 'Guardar nuevo CLIENTE'));?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->