<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-form',
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
    		<th scope="row"><?php echo $form->labelEx($model,'R F C:'); ?></th>
            <td><?php echo $form->textField($model,'RFC_Clientes',array('style'=>'text-transform:uppercase;','placeholder'=>'Registro Federal','size'=>13,'maxlength'=>13)); ?>
		    <th><?php echo $form->error($model,' '); ?></td>
        
    	    <th scope="row"><?php echo $form->labelEx($model,'Nombre:'); ?></th>
            <td><?php echo $form->textField($model,'Nombre_Clientes',array('style'=>'text-transform:uppercase;','placeholder'=>'Nombre Completo','size'=>60,'maxlength'=>255)); ?></td>
		    <th><?php echo $form->error($model,' '); ?></th>
        
    		<th scope="row"><?php echo $form->labelEx($model,'Telefono:'); ?> </th>
            <td><?php echo $form->textField($model,'Telefono_Clientes',array('style'=>'text-transform:uppercase;','placeholder'=>'Telefono Local','size'=>15,'maxlength'=>15)); ?></td>
		    <th><?php echo $form->error($model,' '); ?></th>

            <th scope="row"><?php echo $form->labelEx($model,'Celular:'); ?> </th>
            <td><?php echo $form->textField($model,'Celular_Clientes',array('placeholder'=>'Numero Personal','size'=>15,'maxlength'=>15,)); ?></td>
            <th><?php echo $form->error($model,' '); ?></th>
        </tr>

        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Correo:'); ?> </th>
            <td><?php echo $form->textField($model,'Correo_Clientes',array('placeholder'=>'Correo electronico','email','size'=>20,'maxlength'=>20)); ?></td>
		    <th><?php echo $form->error($model,' '); ?></th>
        
    		<th scope="row"><?php echo $form->labelEx($model,'Direccion:'); ?></th>
            <td><?php echo $form->textField($model,'Direccion_Clientes',array( 'style'=>'text-transform:uppercase;','placeholder'=>'Calle y Num','size'=>60,'maxlength'=>255)); ?></td>
		    <th><?php echo $form->error($model,' '); ?></th>

            <th scope="row"><?php echo $form->labelEx($model,'Colonia:'); ?></th>
            <td><?php echo $form->textField($model,'Colonia_Clientes',array( 'style'=>'text-transform:uppercase;','placeholder'=>'Colonia','size'=>45,'maxlength'=>45)); ?></td>
            <th><?php echo $form->error($model,' '); ?></th>
        
            <th scope="row"><?php echo $form->labelEx($model,'C P'); ?> </th>
            <td><?php echo $form->textField($model,'CP_Clientes',array( 'placeholder'=>'Codigo Postal','size'=>5,'maxlength'=>5)); ?></td>
            <th><?php echo $form->error($model,' '); ?></th>
        </tr>

        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Ciudad:'); ?></th>
            <td><?php echo $form->textField($model,'Ciudad_Clientes',array( 'style'=>'text-transform:uppercase;','placeholder'=>'Ciudad Residencia','size'=>10,'maxlength'=>10)); ?></td>
		    <th><?php echo $form->error($model,' '); ?></th>

            <th scope="row"><?php echo $form->labelEx($model,'Estado:'); ?></th>
            <td><?php echo $form->textField($model,'Estado_Clientes',array( 'style'=>'text-transform:uppercase;','placeholder'=>'Estado de Residencia','size'=>10,'maxlength'=>10)); ?></td>
            <td> <?php echo $form->error($model,' '); ?></td>
        
            <th scope="row"><?php echo $form->labelEx($model,'Med Pub:'); ?></th>
            <td><?php echo $form->textField($model,'Medio_Publicitario_Clientes',array( 'style'=>'text-transform:uppercase;','placeholder'=>'Medio Publicitario','size'=>25,'maxlength'=>25)); ?></td>
            <td> <?php echo $form->error($model,' '); ?></td>

            <th scope="row"><?php echo $form->labelEx($model,'Status'); ?></th>
          <td><?php echo $form->dropDownList($model,'Status_Clientes',Clientes::getStatusClientes()); ?></td>
          <th><?php echo $form->error($model,'Status_Clientes'); ?></th>
        </tr>

	</tbody>
    </table>

	
	<div class="row buttons">
    <?php  echo CHtml::submitButton("Guardar", array
    ('class' => 'btn btn-info', 'name' => 'files', 'title' => 'Guardar nuevo CLIENTE'));?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- form -->