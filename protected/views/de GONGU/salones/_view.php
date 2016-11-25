<?php
/* @var $this SalonesController */
/* @var $data Salones */
?>

		
<div class="view">

	<table>
         <thead>    
         </thead>
         <tfoot>
         </tfoot>
          <tbody>

          <tr>
    		<td scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel('')); ?></b></td>
    		<th><?php echo CHtml::link(CHtml::encode($data->idSalones), array('view', 'id'=>$data->idSalones)); ?>_</th>

    		<td scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel(' ')); ?></b></td>
    		<th><?php echo CHtml::encode($data->Nombre_Salones); ?>,</th>

    		<td scope="row"><b><?php echo CHtml::encode($data->getAttributeLabel('')); ?></b></td>
    		<td><?php echo CHtml::encode($data->Direccion_Salones); ?></td>

	      </tr>

    	 </tbody>
    </table>

</div>