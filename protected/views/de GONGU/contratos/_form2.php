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
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>false,
	'clientOptions'=>array('validateOnSubmit'=>false)
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
    <thead>    
    </thead>
    <tfoot>
    </tfoot>
    <tbody>

    	<tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Fecha'); ?></th>
	        <td><?php echo $form->textField($model,'Fecha',array('readonly'=>"readonly",'value'=>date('Y-m-d'))); ?></td>
	        <th><?php echo $form->error($model,'Fecha'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'FechaEvento'); ?></th>
	        <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
            'model'=>$model,
            'attribute'=>'FechaEvento', 
            'value'=>$model->FechaEvento, 
            'language' => 'es', 
            'htmlOptions' => array( 'readonly'=>"readonly" ), 
                   'options'=>array( 
                   'autoSize'=>true, 
                   'defaultDate'=>$model->FechaEvento,
                   'dateFormat'=>'yy-mm-dd', 
                   'buttonImage'=>Yii::app()->baseUrl.'/images/create_new.gif',
                   'buttonImageOnly'=>true, 
                   'buttonText'=>'FechaEvento', 
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
	        <th><?php echo $form->error($model,'FechaEvento'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'FechaEntrega'); ?></th>
	        <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
            'model'=>$model,
            'attribute'=>'FechaEntrega', 
            'value'=>$model->FechaEntrega, 
            'language' => 'es', 
            'htmlOptions' => array( 'readonly'=>"readonly" ), 
                   'options'=>array( 
                   'autoSize'=>true, 
                   'defaultDate'=>$model->FechaEntrega,
                   'dateFormat'=>'yy-mm-dd', 
                   'buttonImage'=>Yii::app()->baseUrl.'/images/create_new.gif',
                   'buttonImageOnly'=>true, 
                   'buttonText'=>'FechaEntrega', 
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
	        <th><?php echo $form->error($model,'FechaEntrega'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Motivo'); ?></th>
	        <td><?php echo $form->textField($model,'Motivo',array('style'=>'text-transform:uppercase;','numerical','size'=>45,'maxlength'=>45)); ?></td>
	        <th><?php echo $form->error($model,'Motivo'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'HoraInicio'); ?></th>
	        <td><?php $this->widget('application.extensions.jui_timepicker.JTimePicker', array(
             'model'=>$model,
             'attribute'=>'start_time',
              // additional javascript options for the date picker plugin
             'options'=>array(
                 'showPeriod'=>true,
                 'hourText'=>"Hora",
                 'minuteText'=>"Minutos",),
             'htmlOptions'=>array('size'=>8,'maxlength'=>8 ),));?></td>
	        <th><?php echo $form->error($model,'HoraInicio'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'HoraFin'); ?></th>
	        <td><?php $this->widget('application.extensions.jui_timepicker.JTimePicker', array(
             'model'=>$model,
             'attribute'=>'start_time2',
              // additional javascript options for the date picker plugin
             'options'=>array(
                 'showPeriod'=>true,
                 'hourText'=>"Hora",
                 'minuteText'=>"Minutos",),
             'htmlOptions'=>array('size'=>8,'maxlength'=>8 ),));?></td>
	        <th><?php echo $form->error($model,'HoraFin'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'GastoAdicional'); ?></th>
	        <td><?php echo $form->textField($model,'GastoAdicional'); ?></td>
	        <th><?php echo $form->error($model,'GastoAdicional'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Status'); ?></th>
	        <td><?php echo $form->dropDownList($model,'Status',Contratos::getStatus()); ?></td>
	        <th><?php echo $form->error($model,'Status'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Obserbaciones'); ?></th>
	        <td><?php echo $form->textField($model,'Obserbaciones',array('size'=>60,'maxlength'=>255)); ?></td>
	        <th><?php echo $form->error($model,'Obserbaciones'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Clientes_idClientes'); ?></th>
	        <td><?php echo $form->dropDownList($model,'Clientes_idClientes',CHtml::listData(Clientes::model()->findAll(),'idClientes','Nombre'),array('empty'=>'Selecciona Cliente')); ?></td>
	        <th><?php echo $form->error($model,'Clientes_idClientes'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Iglesias_idIglesias'); ?></th>
	        <td><?php echo $form->dropDownList($model,'Iglesias_idIglesias',CHtml::listData(Iglesias::model()->findAll(),'idIglesias','Nombre'),array('empty'=>'Selecciona Iglesia')); ?></td>
	        <th><?php echo $form->error($model,'Iglesias_idIglesias'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Paquetes_idPaquetes'); ?></th>
	        <td><?php echo $form->dropDownList($model,'Paquetes_idPaquetes',CHtml::listData(Paquetes::model()->findAll(),'idPaquetes','Nombre'),array('empty'=>'Selecciona Paquete')); ?></td>
	        <th><?php echo $form->error($model,'Paquetes_idPaquetes'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Salones_idSalones'); ?></th>
	        <td><?php echo $form->dropDownList($model,'Salones_idSalones',CHtml::listData(Salones::model()->findAll(),'idSalones','Nombre'),array('empty'=>'Selecciona Salon')); ?></td>
	        <th><?php echo $form->error($model,'Salones_idSalones'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Servicios_idServicio'); ?></th>
	        <td><?php echo $form->dropDownList($model,'Servicios_idServicio',CHtml::listData(Servicios::model()->findAll(),'idServicio','Nombre'),array('empty'=>'Selecciona Servicio')); ?></td>
	        <th><?php echo $form->error($model,'Servicios_idServicio'); ?></th>
        </tr>
        <tr>
    		<th scope="row"></th>
	        <td></td>
	        <th></th>
        </tr>
    </tbody>
</table>


<?php $this->widget('zii.widgets.jui.CJuiButton', array(
    'name'=>'button2',
    'caption'=>'Save',
    'value'=>'asd2',
    'htmlOptions'=>array('class'=>'btn btn-info'),
    'onclick'=> CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'),
  )); ?>
	

<?php $this->endWidget(); ?>

</div><!-- form -->