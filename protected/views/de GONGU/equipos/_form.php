<?php
/* @var $this EquiposController */
/* @var $model Equipos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'equipos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">Los campos marcados con <span class="required">*</span> son requeridos.</p>
<?php echo $form->errorSummary($model, 'Por favor corrija los siguientes errores de registro.', ' ', array('class' => 'alert alert-error')); ?>

	<table>
     <thead>    
     </thead>
     <tfoot>
     </tfoot>
     <tbody>

        <tr>
     	  <th scope="row"> <?php echo $form->labelEx($model,'Numero_Serie_Equipos'); ?> </th>
          <td> <?php echo $form->textField($model,'Numero_Serie_Equipos',array('size'=>25,'maxlength'=>25)); ?> </td>
          <th> <?php echo $form->error($model,' '); ?> </th>
        
     	  <th scope="row"> <?php echo $form->labelEx($model,'N_Serie_Cargador_Equipos'); ?> </th>
          <td><?php echo $form->textField($model,'N_Serie_Cargador_Equipos',array('size'=>25,'maxlength'=>25)); ?></td>
          <th><?php echo $form->error($model,' '); ?></th>
        
     	  <th scope="row"><?php echo $form->labelEx($model,'Numero_Serie_Bateria_Equipos'); ?></th>
          <td><?php echo $form->textField($model,'Numero_Serie_Bateria_Equipos',array('size'=>45,'maxlength'=>45)); ?></td>
          <th><?php echo $form->error($model,' '); ?></th>
        
     	  <th scope="row"><?php echo $form->labelEx($model,'Status_Equipos'); ?></th>
          <td><?php echo $form->dropDownList($model,'Status_Equipos',Equipos::getStatusEquipos()); ?></td>
          <th><?php echo $form->error($model,' '); ?></th>
        </tr>

        <tr>
     	  <th scope="row"><?php echo $form->labelEx($model,'Clientes_idClientes_Equipos'); ?></th>
          <td><?php echo $form->dropDownList($model,'Clientes_idClientes_Equipos',CHtml::listData(Clientes::model()->findAll(),'idClientes','Nombre_Clientes'),array('empty'=>'Selecciona Cliente')); ?></td>
          <th><?php echo $form->error($model,' '); ?></th>
        
     	  <th scope="row"><?php echo $form->labelEx($model,'Tipos_idTipos_Equipos'); ?></th>
          <td><?php echo $form->dropDownList($model,'Tipos_idTipos_Equipos',CHtml::listData(Tipos::model()->findAll(),'idTipos','Nombre_Tipos'),array('empty'=>'Selecciona Tipo')); ?></td>
          <th><?php echo $form->error($model,' '); ?></th>
        
     	  <th scope="row"><?php echo $form->labelEx($model,'Marcas_idMarcas_Equipos'); ?></th>
          <td><?php echo $form->dropDownList($model,'Marcas_idMarcas_Equipos',CHtml::listData(Marcas::model()->findAll(),'idMarcas','Nombre_Marcas'),array('empty'=>'Selecciona Marca')); ?></td>
          <th><?php echo $form->error($model,' '); ?></th>
        
     	  <th scope="row"><?php echo $form->labelEx($model,'Modelos_idModelos_Equipos'); ?></th>
          <td><?php echo $form->dropDownList($model,'Modelos_idModelos_Equipos',CHtml::listData(Modelos::model()->findAll(),'idModelos','Nombre_Modelos'),array('empty'=>'Selecciona Modelo')); ?></td>
          <th><?php echo $form->error($model,' '); ?></th>
        </tr>

        <tr>
     	  <th scope="row"> <?php echo $form->labelEx($model,'Caracteristicas_Equipos'); ?> </th>
          <td> <?php echo $form->textArea($model,'Caracteristicas_Equipos',array('size'=>60,'maxlength'=>245)); ?> </td>
          <th> <?php echo $form->error($model,' '); ?> </th>
        </tr>

	</tbody>
    </table>


	<div class="row buttons">
    <?php  echo CHtml::submitButton("Guardar", array
    ('class' => 'btn btn-info', 'name' => 'files', 'title' => 'Guardar nuevo CLIENTE'));?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- form -->


	
		
	

	