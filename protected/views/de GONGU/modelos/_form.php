<?php
/* @var $this ModelosController */
/* @var $model Modelos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'modelos-form',
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

    		<th scope="row"><?php echo $form->labelEx($model,'Nombre_Modelos'); ?></th>
	        <td><?php echo $form->textField($model,'Nombre_Modelos'); ?></td>
	        <th><?php echo $form->error($model,' '); ?></th>

	        <th scope="row"><?php echo $form->labelEx($model,'marcas_idMarcas_Modelos'); ?></th>
	        <td><?php echo $form->dropDownList($model,'marcas_idMarcas_Modelos',CHtml::listData(Marcas::model()->findAll(),'idMarcas','Nombre_Marcas'),array('empty'=>'Selecciona Marca')); ?></td>
	        <th><?php echo $form->error($model,' '); ?></th>

	        
</table>

	 <div class="row buttons">
    <?php  echo CHtml::submitButton("Guardar", array
    ('class' => 'btn btn-info', 'name' => 'files', 'title' => 'Guardar nuevo CONTRATO'));?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- form -->