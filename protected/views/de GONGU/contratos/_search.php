<?php
/* @var $this ContratosController */
/* @var $model Contratos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<table>
    <thead>    
    </thead>
    <tfoot>
    </tfoot>
    <tbody>

    	<tr>
    		<th scope="row"> <?php echo $form->label($model,'idContratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'idContratos'); ?> </td>

    		<th scope="row"> <?php echo $form->label($model,'Fecha_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Fecha_Contratos'); ?> </td>

    		<th scope="row"> <?php echo $form->label($model,'Fecha_Evento_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Fecha_Evento_Contratos'); ?> </td>

    		<th scope="row"> <?php echo $form->label($model,'Fecha_Entrega_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Fecha_Entrega_Contratos'); ?> </td>
	    </tr>

	    <tr>
    		<th scope="row"> <?php echo $form->label($model,'Motivo_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Motivo_Contratos',array('size'=>45,'maxlength'=>45)); ?> </td>

    		<th scope="row"> <?php echo $form->label($model,'Hora_Inicio_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Hora_Inicio_Contratos',array('size'=>10,'maxlength'=>10)); ?> </td>

    		<th scope="row"> <?php echo $form->label($model,'Hora_Fin_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Hora_Fin_Contratos',array('size'=>10,'maxlength'=>10)); ?> </td>

    		<th scope="row"> <?php echo $form->label($model,'Gasto_Adicional_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Gasto_Adicional_Contratos'); ?> </td>
	    </tr>

	    <tr>
    		<th scope="row"> <?php echo $form->label($model,'Status_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Status_Contratos'); ?> </td>

    		<th scope="row"> <?php echo $form->label($model,'Observaciones_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Observaciones_Contratos',array('size'=>60,'maxlength'=>255)); ?> </td>

    		<th scope="row"> <?php echo $form->label($model,'Clientes_idClientes_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Clientes_idClientes_Contratos'); ?> </td>

    		<th scope="row"> <?php echo $form->label($model,'Iglesias_idIglesias_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Iglesias_idIglesias_Contratos'); ?> </td>
	    </tr>

	    <tr>
    		<th scope="row"> <?php echo $form->label($model,'Paquetes_idPaquetes_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Paquetes_idPaquetes_Contratos'); ?> </td>

    		<th scope="row"> <?php echo $form->label($model,'Salones_idSalones_Contratos'); ?> </th>
	        <td> <?php echo $form->textField($model,'Salones_idSalones_Contratos'); ?> </td>
	    </tr>



	</tbody>
    </table>
	        

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->