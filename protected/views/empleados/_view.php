<?php
/* @var $this EmpleadosController */
/* @var $data Empleados */
?>
<div class="view">
	<table>
       
          <tbody>

          <tr>
    		<th scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel('RFCtxt_Empleados')); ?>:</b></th>
    		<td><?php echo CHtml::link(CHtml::encode($data->RFCtxt_Empleados), array('view', 'id'=>$data->idEmpleados)); ?>&nbsp;</td>

    		<th scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel('Nombres_Empleados')); ?>:</b> </th>
    		<td><?php echo CHtml::encode($data->Nombres_Empleados.' '.$data->Apellido_Paterno_Empleados. ' '. $data->Apellido_Materno_Empleados); ?></td>

	      </tr>



    	 </tbody>
    </table>

</div>


	
	


	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('NUM_INFONAVIT_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->NUM_INFONAVIT_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido_Materno_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido_Materno_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Genero_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Genero_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Status_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status_IMSS_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Status_IMSS_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fotografia_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Fotografia_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CURPimg_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->CURPimg_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INEimg_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->INEimg_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ActaNacimineto_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->ActaNacimineto_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ComprovanteDomicilio_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->ComprovanteDomicilio_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMSSimg_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->IMSSimg_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INFONAVITimg_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->INFONAVITimg_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Calle_Domicilio_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Calle_Domicilio_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_Domicilio_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Num_Domicilio_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Colonia_Domicilio_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Colonia_Domicilio_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_Postal_Domicilio_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Cod_Postal_Domicilio_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad_Domicilio_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad_Domicilio_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado_Domicilio_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Estado_Domicilio_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Puestos_idPuestos_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Puestos_idPuestos_Empleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Obras_idObras_Empleados')); ?>:</b>
	<?php echo CHtml::encode($data->Obras_idObras_Empleados); ?>
	<br />

	*/ ?>

