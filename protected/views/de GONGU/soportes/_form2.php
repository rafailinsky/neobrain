<?php
/* @var $this SoportesController */
/* @var $model Soportes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'soportes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
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
    		<th scope="row"><?php echo $form->labelEx($model,'FechaIngreso'); ?></th>
		    <td><?php #echo $form->textField($model,'fechaEvento');
                  $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
            'model'=>$model,
            'attribute'=>'FechaIngreso', 
            'value'=>$model->FechaIngreso, 
            'language' => 'es', 
            'htmlOptions' => array( 'readonly'=>"readonly" ), 
                   'options'=>array( 
                   'autoSize'=>true, 
                   'defaultDate'=>$model->FechaIngreso,
                   'dateFormat'=>'yy-mm-dd', 
                   'buttonImage'=>Yii::app()->baseUrl.'/images/create_new.gif',
                   'buttonImageOnly'=>true, 
                   'buttonText'=>'Fecha', 
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
		      <th><?php echo $form->error($model,'FechaIngreso'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'FechaEntrega'); ?></th>
	        <td><?php echo $form->textField($model,'FechaEntrega'); ?></td>
	        <th><?php echo $form->error($model,'FechaEntrega'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Sintomas'); ?></th>
	        <td><?php echo $form->textArea($model,'Sintomas',array('size'=>60,'maxlength'=>145)); ?></td>
	        <th><?php echo $form->error($model,'Sintomas'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Solucion'); ?></th>
	        <td><?php echo $form->textArea($model,'Solucion',array('size'=>60,'maxlength'=>245)); ?></td>
	        <th><?php echo $form->error($model,'Solucion'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Costo'); ?></th>
	        <td><?php echo $form->textField($model,'Costo',array('size'=>11,'maxlength'=>11)); ?></td>
	        <th><?php echo $form->error($model,'Costo'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Status'); ?></th>
	        <td><?php echo $form->textField($model,'Status'); ?></td>
	        <th><?php echo $form->error($model,'Status'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Clientes_idClientes'); ?></th>
	        <td><?php echo $form->dropDownList($model,'Clientes_idClientes',CHtml::listData(Clientes::model()->findAll(),'idClientes','Nombre'),array('empty'=>'Selecciona Cliente')); ?></td>
	        <th><?php echo $form->error($model,'Clientes_idClientes'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Servicios_idServicio'); ?></th>
	        <td><?php echo $form->dropDownList($model,'Servicios_idServicio',CHtml::listData(Servicios::model()->findAll(),'idServicio','Nombre'),array('empty'=>'Selecciona Servicio')); ?></td>
	        <th><?php echo $form->error($model,'Servicios_idServicio'); ?></th>
        </tr>
        <tr>
    		<th scope="row"><?php echo $form->labelEx($model,'Equipos_idEquipos'); ?></th>
	        <td><?php echo $form->dropDownList($model,'Equipos_idEquipos',CHtml::listData(Equipos::model()->findAll(),'idEquipos','Marca','Modelo'),array('empty'=>'Selecciona Equipo')); ?></td>
	        <th><?php echo $form->error($model,'Equipos_idEquipos'); ?></th>
        </tr>
            </tbody>
    </table>

            

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>


 
<?php $this->endWidget(); ?>

</div><!-- form -->