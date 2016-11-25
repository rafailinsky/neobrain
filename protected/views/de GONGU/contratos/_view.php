<?php
/* @var $this ContratosController */
/* @var $data Contratos */
?>

<div class="view">

	<table>
         <thead>    
         </thead>
         <tfoot>
         </tfoot>
          <tbody>

          <tr>
    		<td scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel(' ')); ?></b></td>
    		<th><?php echo CHtml::link(CHtml::encode($data->idContratos), array('view', 'id'=>$data->idContratos)); ?>_</th>

    		<td scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel(' ')); ?></b></td>
    		<th><?php echo CHtml::encode($data->Fecha_Evento_Contratos); ?></th>

    		<td scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel(' ')); ?></b></td>
    		<td><?php echo CHtml::encode($data->Motivo_Contratos); ?></td>

    		<td scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel(' ')); ?></b></td>
    		<td><?php echo CHtml::encode($data->Status_Contratos); ?></td>

    		<td scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel(' ')); ?></b></td>
    		<td><?php echo CHtml::encode($data->Clientes_idClientes_Contratos); ?></td>

	      </tr>

    	 </tbody>
    </table>




	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('idContratos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idContratos), array('view', 'id'=>$data->idContratos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Contratos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Evento_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Evento_Contratos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Entrega_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Entrega_Contratos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Motivo_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Motivo_Contratos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora_Inicio_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Hora_Inicio_Contratos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora_Fin_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Hora_Fin_Contratos); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Gasto_Adicional_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Gasto_Adicional_Contratos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Status_Contratos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Observaciones_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Observaciones_Contratos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clientes_idClientes_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Clientes_idClientes_Contratos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Iglesias_idIglesias_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Iglesias_idIglesias_Contratos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Paquetes_idPaquetes_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Paquetes_idPaquetes_Contratos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Salones_idSalones_Contratos')); ?>:</b>
	<?php echo CHtml::encode($data->Salones_idSalones_Contratos); ?>
	<br />

	*/ ?>

</div>