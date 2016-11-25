<?php
/* @var $this IglesiasController */
/* @var $data Iglesias */
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
    		<th><?php echo CHtml::link(CHtml::encode($data->idIglesias), array('view', 'id'=>$data->idIglesias));?>.-</th>

    		<td scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel(' ')); ?> </b></td>
    		<th><?php echo CHtml::encode($data->Nombre_Iglesias); ?>, &nbsp; </th>

    		<td scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel(' ')); ?> </b></td>
    		<td><?php echo CHtml::encode($data->Direccion_Iglesias); ?></td>

	      </tr>

    	 </tbody>
    </table>


</div>