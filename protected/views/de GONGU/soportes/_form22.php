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
		<?php #echo $form->textField($model,'fechaEvento');
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
                   ))); ?>
		<?php echo $form->error($model,'FechaIngreso'); ?>
	        </td>
            </tr>

            <div class="row">
		<?php echo $form->labelEx($model,'FechaEntrega'); ?>
		<?php echo $form->textField($model,'FechaEntrega'); ?>
		<?php echo $form->error($model,'FechaEntrega'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sintomas'); ?>
		<?php echo $form->textField($model,'Sintomas',array('size'=>60,'maxlength'=>145)); ?>
		<?php echo $form->error($model,'Sintomas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Solucion'); ?>
		<?php echo $form->textField($model,'Solucion',array('size'=>60,'maxlength'=>245)); ?>
		<?php echo $form->error($model,'Solucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Costo'); ?>
		<?php echo $form->textField($model,'Costo',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Costo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clientes_idClientes'); ?>
		<?php echo $form->textField($model,'Clientes_idClientes'); ?>
		<?php echo $form->error($model,'Clientes_idClientes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Servicios_idServicio'); ?>
		<?php echo $form->textField($model,'Servicios_idServicio'); ?>
		<?php echo $form->error($model,'Servicios_idServicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Equipos_idEquipos'); ?>
		<?php echo $form->textField($model,'Equipos_idEquipos'); ?>
		<?php echo $form->error($model,'Equipos_idEquipos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>


  </tbody>
    </table>

	

	

<?php $this->endWidget(); ?>

</div><!-- form -->