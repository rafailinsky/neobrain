<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empleados-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son requeridos.</p>
  <?php echo $form->errorSummary($model, 'Por favor corrija los siguientes errores de registro.', ' ', array('class' => 'alert alert-error')); ?>


<div class="row-fluid">
  <div class="span6">
  <?php $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"Datos Personales",));?>

  	<table class="table table-hover">
      <caption></caption>
      <thead></thead>
      <tbody>
        <tr>
          	<td><?php echo $form->labelEx($model,'RFCtxt_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'RFCtxt_Empleados',array('style'=>'text-transform:uppercase;','placeholder'=>'RFC DE EMPLEADO','size'=>15,'maxlength'=>15)); ?></td>
         </tr>
         <tr>
          	<td><?php echo $form->labelEx($model,'IMSStxt_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'IMSStxt_Empleados',array('style'=>'text-transform:uppercase;','placeholder'=>'NUMERO IMSS EMPLEADO','size'=>15,'maxlength'=>15)); ?></td>
        </tr>
        <tr>
          	<td><?php echo $form->labelEx($model,'CURPtxt_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'CURPtxt_Empleados',array('style'=>'text-transform:uppercase;','placeholder'=>'CURP DE EMPLEADO','size'=>15,'maxlength'=>15)); ?> </td>
        </tr>
        <tr>
          	<td><?php echo $form->labelEx($model,'Nombres_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'Nombres_Empleados',array('style'=>'text-transform:uppercase;','placeholder'=>'NOMBRE EMPLEADO','size'=>25,'maxlength'=>25)); ?></td>
        </tr>
        <tr>
          	<td><?php echo $form->labelEx($model,'Apellido_Paterno_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'Apellido_Paterno_Empleados',array('style'=>'text-transform:uppercase;','placeholder'=>'APELLIDO PATERNO','size'=>15,'maxlength'=>15)); ?></td>
        </tr>
        <tr>
          	<td><?php echo $form->labelEx($model,'Apellido_Materno_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'Apellido_Materno_Empleados',array('style'=>'text-transform:uppercase;','placeholder'=>'APELLIDO MATERNO','size'=>15,'maxlength'=>15)); ?></td>
        </tr>
        
        <tr>
          	<td><?php echo $form->labelEx($model,'Telefono_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'Telefono_Empleados',array('placeholder'=>'TELEFONO ','size'=>15,'maxlength'=>15)); ?></td>
        </tr>
         <tr>
            <td><?php echo $form->labelEx($model,'Correo_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'Correo_Empleados',array('placeholder'=>'CORREO ELECTRONICO ','size'=>15,'maxlength'=>15)); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'Celular_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'Celular_Empleados',array('placeholder'=>'CELULAR','size'=>15,'maxlength'=>15)); ?></td>
        </tr>
        
      </tbody>
    </table>
    <?php $this->endWidget();?>
  </div>

<div class="span6">
  <?php $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"Domicilio",));?>

  	<table class="table table-hover">
      <caption></caption>
      <thead></thead>
      <tbody>
        <tr>
          	<td><?php echo $form->labelEx($model,'Calle_Domicilio_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'Calle_Domicilio_Empleados',array('style'=>'text-transform:uppercase;','placeholder'=>'CALLE DE DOMICILIO','size'=>45,'maxlength'=>45)); ?></td>
         </tr>
         <tr>
          	<td><?php echo $form->labelEx($model,'Num_Domicilio_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'Num_Domicilio_Empleados',array('style'=>'text-transform:uppercase;','placeholder'=>'NUMERO DE DOMICILIO','size'=>9,'maxlength'=>9)); ?></td>
        </tr>
        <tr>
          	<td><?php echo $form->labelEx($model,'Colonia_Domicilio_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'Colonia_Domicilio_Empleados',array('style'=>'text-transform:uppercase;','placeholder'=>'COLONIA DE DOMICILIO','size'=>45,'maxlength'=>45)); ?></td>
        </tr>
        <tr>
          	<td><?php echo $form->labelEx($model,'Cod_Postal_Domicilio_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'Cod_Postal_Domicilio_Empleados',array('placeholder'=>'CODIGO POSTAL','size'=>7,'maxlength'=>7)); ?></td>
        </tr>
        <tr>
          	<td><?php echo $form->labelEx($model,'Ciudad_Domicilio_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'Ciudad_Domicilio_Empleados',array('style'=>'text-transform:uppercase;','placeholder'=>'CIUDAD DE RESIDENCIA','size'=>15,'maxlength'=>15)); ?></td>
        </tr>
        <tr>
          	<td><?php echo $form->labelEx($model,'Estado_Domicilio_Empleados'); ?></td>
            <td><?php echo $form->textField($model,'Estado_Domicilio_Empleados',array('style'=>'text-transform:uppercase;','placeholder'=>'ESTADO DE RESIDENCIA','size'=>15,'maxlength'=>15)); ?></td>
        </tr>
        <tr>
          	<td><?php echo $form->labelEx($model,'Puestos_idPuestos_Empleados'); ?></td>
            <td><?php echo $form->dropDownList($model,'Puestos_idPuestos_Empleados',CHtml::listData(Puestos::model()->findAll(),'idPuestos','Nombre_Puestos'),array('empty'=>'Selecciona Puesto')); ?></td>
        </tr>
        <tr>
          	<td><?php echo $form->labelEx($model,'Obras_idObras_Empleados'); ?></td>
            <td><?php echo $form->dropDownList($model,'Obras_idObras_Empleados',CHtml::listData(Obras::model()->findAll(),'idObras','Nombre_Obras'),array('empty'=>'Selecciona Obra')); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'Genero_Empleados'); ?></td>
            <td><?php echo $form->dropDownList($model,'Genero_Empleados',Empleados::getGeneroEmpleados()); ?></td>
        </tr>
        
       
      </tbody>
    </table>
    <?php $this->endWidget();?>
  </div>


<div class="row-fluid">
  <div class="span6">
  <?php $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"Documentos",));?>

  	<table class="table table-hover">
      <caption></caption>
      <thead></thead>
      <tbody>
        <tr>
          	<td scope="row"><?php echo $form->labelEx($model,'INFONAVITimg_Empleados'); ?> </td>      
	        <td><?php echo $form->fileField($model,'INFONAVITimg_Empleados');?>            
                    </td>
         </tr>
         <td><?php echo $form->labelEx($model,'INEimg_Empleados'); ?> </td>      
	        <td><?php echo $form->fileField($model,'INEimg_Empleados');?>            
                    </td>
         <tr>
         	<td><?php echo $form->labelEx($model,'IMSSimg_Empleados'); ?> </td>      
	        <td><?php echo $form->fileField($model,'IMSSimg_Empleados');?>            
                    </td>
         </tr>
      </tbody>
    </table>
    <?php $this->endWidget();?>
  </div>

<div class="span6">
  <?php $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"Documentos",));?>

  	<table class="table table-hover">
      <caption></caption>
      <thead></thead>
      <tbody>
        <tr>
          	<td><?php echo $form->labelEx($model,'CURPimg_Empleados'); ?> </td>      
	        <td><?php echo $form->fileField($model,'CURPimg_Empleados');?>            
                    </td>
         </tr>
         <tr>
         	<td><?php echo $form->labelEx($model,'ActaNacimineto_Empleados'); ?> </td>      
	        <td><?php echo $form->fileField($model,'ActaNacimineto_Empleados');?>            
                    </td>
         </tr>
         <tr>
         	<td><?php echo $form->labelEx($model,'ComprovanteDomicilio_Empleados'); ?> </td>      
	        <td><?php echo $form->fileField($model,'ComprovanteDomicilio_Empleados');?>            
                    </td>
         </tr>
      </tbody>
    </table>
    <?php $this->endWidget();?>
  </div>


<div class="row-fluid">
  <div class="span12"> 

<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
		'title'=>"Fotografia",
	)); ?>
<center>
	<?php
   $this->widget('ext.xphoto.XPhoto',array(
    'model'=>$model,
    'attribute'=>'Fotografia_Empleados',
));?>
</center>
<?php $this->endWidget();?>
</div>
</div>


	<div class="row buttons">
    <?php  echo CHtml::submitButton("Guardar", array
    ('class' => 'btn btn-info', 'name' => 'files', 'title' => 'Guardar'));?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- form -->