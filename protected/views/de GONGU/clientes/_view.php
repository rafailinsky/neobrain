<?php
/* @var $this ClientesController */
/* @var $data Clientes */
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
    		<th> <?php echo CHtml::link(CHtml::encode($data->idClientes), array('view', 'id'=>$data->idClientes)); ?> .-</th>

    		<td scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel(' ')); ?></b> </td>
    		<th><?php echo CHtml::encode($data->Nombre_Clientes); ?> &nbsp; </th>

    		<td scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel('Tel')); ?>:</b></td>
    		<th><?php echo CHtml::encode($data->Telefono_Clientes); ?></th>

	      </tr>

    	 </tbody>
    </table>

</div>