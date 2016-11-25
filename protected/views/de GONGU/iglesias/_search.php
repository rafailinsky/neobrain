<?php
/* @var $this IglesiasController */
/* @var $model Iglesias */
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
    		<th scope="row"> <?php echo $form->label($model,'idIglesias'); ?> ?> </th>
	        <td> <?php echo $form->textField($model,'idIglesias'); ?> </td>

    		<th scope="row"> <?php echo $form->label($model,'Nombre_Iglesias'); ?> </th>
	        <td> <?php echo $form->textField($model,'Nombre_Iglesias',array('size'=>45,'maxlength'=>45)); ?> </td>

	        <th scope="row"> <?php echo $form->label($model,'Direccion_Iglesias'); ?> </th>
	        <td> <?php echo $form->textField($model,'Direccion_Iglesias',array('size'=>60,'maxlength'=>245)); ?> </td>
	    </tr>
	    
	</tbody>
    </table>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->