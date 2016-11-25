<?php
/* @var $this EmpresasController */
/* @var $data Empresas */
?>
	<table class="table table-striped table-hover table-bordered table-condensed">
      <thead>
        <tr>
          <th><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Empresas')); ?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo CHtml::encode($data->Nombre_Empresas); ?></td>
        </tr>
      </tbody>
    </table>
