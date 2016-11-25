<?php
class GActiveRecord extends CActiveRecord
{
	public static $db1;
	
	
    public function behaviors()
	{
		return array(
			'GCamposBehavior' => array(
				'class' => 'ext.campos.GCamposBehavior',
				'campoFechaCreacion' => 'creado',
				'campoFechaActualizacion' => 'actualizado',
				'campoUsuarioCC' => 'usuario',
				'campoIp' => 'ip',
				),
		);
	}
	
    
    }
?>