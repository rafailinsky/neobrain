<?php
/* @var $this PaquetesController */
/* @var $data Paquetes */
?>

<div class="view">

	<table>
         <thead>    
         </thead>
         <tfoot>
         </tfoot>
          <tbody>

          <tr>

          	<td scope="row"> <?php echo CHtml::encode($data->getAttributeLabel(' ')); ?> </b></td>
    		<th> <?php echo CHtml::link(CHtml::encode($data->idPaquetes), array('view', 'id'=>$data->idPaquetes)); ?>.-</th>

    		<td scope="row"> <?php echo CHtml::encode($data->getAttributeLabel(' ')); ?></b></td>
    		<th> <?php echo CHtml::encode($data->Nombre_Paquetes); ?>:</th>

    		<td scope="row"><?php echo CHtml::encode($data->getAttributeLabel(' ')); ?> </b></td>
    		<td><?php echo CHtml::encode($data->Contenido_Paquetes); ?> </td>

    		<td scope="row"><?php echo CHtml::encode($data->getAttributeLabel(' ')); ?> </b></td>
    		<th>$ <?php echo CHtml::encode($data->Costo_Paquetes); ?>.00</th>



		  </tr>

    	 </tbody>
    </table>


</div>