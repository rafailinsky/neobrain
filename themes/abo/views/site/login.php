<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="page-header">
	<h2>Accede <small>a tu cuenta.</small></h2>
</div>

<div class="row-fluid">

     <div class="span8"align="center">
         <?php $this->beginWidget('zii.widgets.CPortlet', array('title'=>"NEOBRAIN", )); ?>

             <center> <p>NEOBRAIN</p></center>

              <center> <p>NEOBRAINNEOBRAINNEOBRAINNEOBRAINNEOBRAIN
              NEOBRAINNEOBRAINNEOBRAINNEOBRAINNEOBRAINNEOBRAIN
              NEOBRAINNEOBRAINNEOBRAINNEOBRAINNEOBRAINNEOBRAIN
              NEOBRAINNEOBRAINNEOBRAINNEOBRAINNEOBRAIN
              </p></center>
         <?php $this->endWidget();?>
     </div>


     <div class="span4"align="center">

         <?php $this->beginWidget('zii.widgets.CPortlet', array('title'=>"Acceso al Sistema",)); ?>

         <center> <p>Por favor, rellene el siguiente formulario con sus datos de acceso:</p></center>
    
         <div class="form">
             <?php $form=$this->beginWidget('CActiveForm', array(
             'id'=>'login-form',
             'enableClientValidation'=>true,
             'clientOptions'=>array(
             'validateOnSubmit'=>true,), )); ?>
    
              <p class="note">Los Campos marcados con <span class="required">*</span> son requeridos.</p>

             <?php echo $form->errorSummary($model, 
             'Por favor corrija los siguientes errores.', ' ', array('class' => 'alert alert-error')); ?>

             <center>
                 <table class="table table-hover">
                     <caption></caption>
                     <thead></thead>
                     <tbody><center>
                         <tr aling="center">
                             <td><?php echo $form->labelEx($model,'Usuario*'); ?></td>
                             <td><?php echo $form->textField($model,'username'); ?></td>
                         </tr> 
                             <td><?php echo $form->labelEx($model,'Clave*'); ?></th>
                             <td><?php echo $form->passwordField($model,'password'); ?></td>
                         <tr>
                     </tbody>
                 </table>
             </center>

             
             <div class="row buttons">
                 <?php echo CHtml::submitButton('Acceder',array('class'=>'btn btn btn-primary')); ?>
             </div>
         <?php $this->endWidget(); ?>
         </div><!-- form -->
      <?php $this->endWidget();?>
     </div>
   </div>