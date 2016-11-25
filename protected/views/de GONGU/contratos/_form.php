<?php
/* @var $this ContratosController */
/* @var $model Contratos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contratos-form',
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
    		  <th scope="row"><?php echo $form->labelEx($model,'Fecha'); ?></th>
	        <td><?php echo $form->textField($model,'Fecha_Contratos',array('readonly'=>"readonly",'value'=>date('Y-m-d'))); ?></td>
	        <th><?php echo $form->error($model,'Fecha_Contratos'); ?></th>

          <th scope="row"><?php echo $form->labelEx($model,'Dia Evento'); ?></th>
          <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
            'model'=>$model,
            'attribute'=>'Fecha_Evento_Contratos', 
            'value'=>$model->Fecha_Evento_Contratos, 
            'language' => 'es', 
            'htmlOptions' => array( 'placeholder'=>'Dia del Evento','readonly'=>"readonly" ), 
                   'options'=>array( 
                   'autoSize'=>true, 
                   'defaultDate'=>$model->Fecha_Evento_Contratos,
                   'dateFormat'=>'yy-mm-dd', 
                   'buttonImage'=>Yii::app()->baseUrl.'/images/create_new.gif',
                   'buttonImageOnly'=>true, 
                   'buttonText'=>'Fecha_Evento_Contratos', 
                   'selectOtherMonths'=>false, 
                   'showAnim'=>'slide',
                   'showButtonPanel'=>false,
                    //'showOn'=>'button',
                    'showOtherMonths'=>false,
                    'changeMonth' => 'true',
                    'changeYear' => 'true',
                    'minDate'=>'date("Y-m-d")',//fecha minima 
                    'maxDate'=>"+20Y",//fecha maxima 
                   ))); ?></td>
           <th><?php echo $form->error($model,'Fecha_Evento_Contratos'); ?></th>

           <th scope="row"><?php echo $form->labelEx($model,'Entrega'); ?></th>
          <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
            'model'=>$model,
            'attribute'=>'Fecha_Entrega_Contratos', 
            'value'=>$model->Fecha_Entrega_Contratos, 
            'language' => 'es', 
            'htmlOptions' => array( 'placeholder'=>'Dia de Entrega','readonly'=>"readonly" ), 
                   'options'=>array( 
                   'autoSize'=>true, 
                   'defaultDate'=>$model->Fecha_Entrega_Contratos,
                   'dateFormat'=>'yy-mm-dd', 
                   'buttonImage'=>Yii::app()->baseUrl.'/images/create_new.gif',
                   'buttonImageOnly'=>true, 
                   'buttonText'=>'Fecha_Entrega_Contratos', 
                   'selectOtherMonths'=>false, 
                   'showAnim'=>'slide',
                   'showButtonPanel'=>false,
                    //'showOn'=>'button',
                    'showOtherMonths'=>false,
                    'changeMonth' => 'true',
                    'changeYear' => 'true',
                    'minDate'=>'date("Y-m-d")+1d',//fecha minima 
                    'maxDate'=>"+5Y",//fecha maxima 
                   ))); ?></td>
          <th><?php echo $form->error($model,'Fecha_Entrega_Contratos'); ?></th>

          <th scope="row"><?php echo $form->labelEx($model,'Motivo'); ?></th>
          <td><?php echo $form->textField($model,'Motivo_Contratos',array('placeholder'=>'Anfitrion (es)','style'=>'text-transform:uppercase;','numerical','size'=>45,'maxlength'=>45)); ?></td>
          <th><?php echo $form->error($model,'Motivo_Contratos'); ?></th>
      </tr>
      
      <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Hora Inicio'); ?></th>
	        <td><?php $this->widget('application.extensions.jui_timepicker.JTimePicker', array(
             'model'=>$model,
             'attribute'=>'Hora_Inicio_Contratos',
              // additional javascript options for the date picker plugin
             'options'=>array(
                 'showPeriod'=>true,
                 'hourText'=>"Hora",
                 'minuteText'=>"Minutos",),
             'htmlOptions'=>array('readonly'=>"readonly",'placeholder'=>'Inicio del Evento','size'=>8,'maxlength'=>8 ),));?></td>
	        <th><?php echo $form->error($model,'Hora_Inicio_Contratos'); ?></th>

          <th scope="row"><?php echo $form->labelEx($model,'Hora Fin'); ?></th>
          <td><?php $this->widget('application.extensions.jui_timepicker.JTimePicker', array(
             'model'=>$model,
             'attribute'=>'Hora_Fin_Contratos',
              // additional javascript options for the date picker plugin
             'options'=>array(
                 'showPeriod'=>true,
                 'hourText'=>"Hora",
                 'minuteText'=>"Minutos",),
             'htmlOptions'=>array('readonly'=>"readonly",'placeholder'=>'Terminacion del Contrato','size'=>8,'maxlength'=>8 ),));?></td>
          <th><?php echo $form->error($model,'Hora_Fin_Contratos'); ?></th>

          <th scope="row"><?php echo $form->labelEx($model,'Gasto'); ?></th>
          <td>
             <?php echo '<div class="input-prepend">';?>
             <?php echo '<div class="input-append">';?>
             <?php echo '<span class="add-on">$</span>';?>
             <?php echo $form->textField($model,'Gasto_Adicional_Contratos',array('class'=>'input-medium','placeholder'=>'Requerido Adicional','size'=>60,'maxlength'=>255)); ?>
             <?php echo '<span class="add-on">.00</span>';?>
             <?php echo '</div>';?>
             <?php echo '</div>';?>
          </td>
          <th><?php echo $form->error($model,' '); ?></th>

          <th scope="row"><?php echo $form->labelEx($model,'Status'); ?></th>
          <td><?php echo $form->dropDownList($model,'Status_Contratos',Contratos::getStatusContratos()); ?></td>
          <th><?php echo $form->error($model,' '); ?></th>
        </tr>

        <tr>
          <th scope="row"><?php echo $form->labelEx($model,'Cliente'); ?></th>
          <td><?php echo $form->dropDownList($model,'Clientes_idClientes_Contratos',CHtml::listData(Clientes::model()->findAll(),'idClientes','Nombre_Clientes'),array('empty'=>'Selecciona Cliente')); ?></td>
          <th><?php echo $form->error($model,'Clientes_idClientes_Contratos'); ?></th>

          <th scope="row"><?php echo $form->labelEx($model,'Iglesia'); ?></th>
          <td><?php echo $form->dropDownList($model,'Iglesias_idIglesias_Contratos',CHtml::listData(Iglesias::model()->findAll(),'idIglesias','Nombre_Iglesias'),array('empty'=>'Selecciona Iglesia')); ?></td>
          <th><?php echo $form->error($model,'Iglesias_idIglesias_Contratos'); ?></th>

          <th scope="row"><?php echo $form->labelEx($model,'Paquete'); ?></th>
          <td><?php echo $form->dropDownList($model,'Paquetes_idPaquetes_Contratos',CHtml::listData(Paquetes::model()->findAll(),'idPaquetes','Nombre_Paquetes'),array('empty'=>'Selecciona Paquete')); ?></td>
          <th><?php echo $form->error($model,'Paquetes_idPaquetes_Contratos'); ?></th>

          <th scope="row"><?php echo $form->labelEx($model,'Salon'); ?></th>
          <td><?php echo $form->dropDownList($model,'Salones_idSalones_Contratos',CHtml::listData(Salones::model()->findAll(),'idSalones','Nombre_Salones'),array('empty'=>'Selecciona Salon')); ?></td>
          <th><?php echo $form->error($model,'Salones_idSalones_Contratos'); ?></th>
        </tr>

        <tr>
    		  <th scope="row"><?php echo $form->labelEx($model,'Obserbaciones'); ?></th>
	        <td><?php echo $form->textArea($model,'Observaciones_Contratos',array('placeholder'=>'Notas o Pedidos Adicionales','size'=>60,'maxlength'=>255)); ?></td>
	        <th><?php echo $form->error($model,'Observaciones_Contratos'); ?></th>
        </tr>

        <tr>
        <th scope="row"> </th>
          <td> </td>
          <th> </th>
        
        <th scope="row"> </th>
          <td> </td>
          <th> </th>
        
        <th scope="row"> </th>
          <td> </td>
          <th> </th>
        
        <th scope="row"> </th>
          <td> </td>
          <th> </th>
        
        <th scope="row"> </th>
          <td> </td>
          <th> </th>
        </tr>

    </tbody>
</table>

	 <div class="row buttons">
    <?php  echo CHtml::submitButton("Guardar", array
    ('class' => 'btn btn-info', 'name' => 'files', 'title' => 'Guardar nuevo CONTRATO'));?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- form -->






