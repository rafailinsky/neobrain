<?php
/* @var $this EntradasController */
/* @var $model Entradas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entradas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
	     'enableClientValidation'=>false,
	     'clientOptions'=>array('validateOnSubmit'=>false)))?>

	<p class="note">Los campos marcados con <span class="required">*</span> son requeridos.</p>

	 <table>
     <thead>    
     </thead>
     <tfoot>
     </tfoot>
     <tbody>
      
     	 <tr>
    		 <th scope="row"><?php echo $form->labelEx($model,'Fecha'); ?></th>
	       <td><?php echo $form->textField($model,'Fecha_Ingreso_Entradas',array('readonly'=>"readonly",'value'=>date('Y-m-d'))); ?></td>
	       <th><?php echo $form->error($model,' '); ?></th>
        
         <th scope="row"><?php echo $form->labelEx($model,'Entrega'); ?></th>
	       <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
            'model'=>$model,
            'attribute'=>'Fecha_Entrega_Entradas', 
            'value'=>$model->Fecha_Entrega_Entradas, 
            'language' => 'es', 
            'htmlOptions' => array( 'placeholder'=>'Dia de Entrega','readonly'=>"readonly" ), 
                   'options'=>array( 
                   'autoSize'=>true, 
                   'defaultDate'=>$model->Fecha_Entrega_Entradas,
                   'dateFormat'=>'yy-mm-dd', 
                   'buttonImage'=>Yii::app()->baseUrl.'/images/create_new.gif',
                   'buttonImageOnly'=>true, 
                   'buttonText'=>'Fecha_Entrega_Entradas', 
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
	        <th><?php echo $form->error($model,'Fecha_Entrega_Entradas'); ?></th>

      <?php
       $htmlOptions=array(
           "ajax"=>array(
              "url"=>$this->createUrl("EquiposByCliente"),
              "type"=>"POST",
              "update"=>"#Entradas_Equipos_idEquipos_Entradas",
              ), ); ?>

           <th scope="row"><?php echo $form->labelEx($model,'Cliente'); ?></th>
           <td><?php echo $form->dropDownList($model,'Clientes_idClientes_Entradas',$model->getMenuClientes(),$htmlOptions); ?></td>
           <th><?php echo $form->error($model,'Clientes_idClientes_Entradas'); ?></th>

           <th scope="row"><?php echo $form->labelEx($model,'Equipo'); ?></th>
           <td><?php echo $form->dropDownList($model,'Equipos_idEquipos_Entradas',$model->getMenuEquipos()); ?></td>
           <th><?php echo $form->error($model,'Equipos_idEquipos_Entradas'); ?></th>
       </tr>

     	 <tr>
    	  	<th scope="row"><?php echo $form->labelEx($model,'Obs'); ?></th>
          <td><?php echo $form->textArea($model,'Observaciones_Cliente_Entradas',array('style'=>' ','placeholder'=>'Observaciones del Cliente','size'=>60,'maxlength'=>145)); ?>
		      <th><?php echo $form->error($model,'Observaciones_Cliente_Entradas'); ?></td>
        
    	    <th scope="row"><?php echo $form->labelEx($model,'Pred:'); ?></th>
          <td><?php echo $form->textArea($model,'Prediagnostico_Entradas',array('style'=>' ','placeholder'=>'Prediagnostico Tecnico','size'=>60,'maxlength'=>245)); ?></td>
		      <th><?php echo $form->error($model,'Prediagnostico_Entradas'); ?></th>
        
    	   	<th scope="row"><?php echo $form->labelEx($model,'Datos:'); ?> </th>
          <td><?php echo $form->textArea($model,'Datos_Entrada_Entradas',array('style'=>'text-transform:uppercase;','placeholder'=>'Dato Adicional Equipo','size'=>45,'maxlength'=>45)); ?></td>
		      <th><?php echo $form->error($model,'Datos_Entrada_Entradas'); ?></th>

          <th scope="row"><?php echo $form->labelEx($model,'Da&ntilde;o:'); ?></th>
          <td><?php echo $form->textArea($model,'Partes_Dañadas_Entradas',array( 'style'=>'text-transform:uppercase;','placeholder'=>'Daños Fisicos','size'=>45,'maxlength'=>45)); ?></td>
          <td> <?php echo $form->error($model,'Partes_Dañadas_Entradas'); ?></td>
       </tr>

       <tr>	
    		<th scope="row"><?php echo $form->labelEx($model,'Fallas:'); ?></th>
        <td><?php echo $form->textArea($model,'Fallas_Equipo_Entradas',array( 'style'=>'text-transform:uppercase;','placeholder'=>'Fallas Logicas','size'=>45,'maxlength'=>45)); ?></td>
		    <td> <?php echo $form->error($model,'Fallas_Equipo_Entradas'); ?></td>

        <th scope="row"><?php echo $form->labelEx($model,'Status'); ?></th>
          <td><?php echo $form->dropDownList($model,'Status_Entradas',Entradas::getStatusEntradas()); ?></td>
          <th><?php echo $form->error($model,'Status_Entradas'); ?></th>

          <th scope="row"><?php echo $form->labelEx($model,'Tec'); ?></th>
           <td><?php echo $form->dropDownList($model,'Empleados_idEmpleados_Entradas',CHtml::listData(Empleados::model()->findAll(),'idEmpleados','Nombre_Empleados'),array('empty'=>'Selecciona Tecnico')); ?></td>
           <th><?php echo $form->error($model,' '); ?></th>

       </tr>
	   </tbody>
   </table>

   <div class="row buttons">
     <?php  echo CHtml::submitButton("Guardar", array
          ('class' => 'btn btn-info', 'name' => 'files', 'title' => 'Guardar nueva ENTRADA'));?>
   </div>
<?php $this->endWidget(); ?>
</div><!-- form -->