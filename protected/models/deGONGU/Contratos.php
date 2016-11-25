<?php

/**
 * This is the model class for table "contratos".
 *
 * The followings are the available columns in table 'contratos':
 * @property integer $idContratos
 * @property string $Fecha_Contratos
 * @property string $Fecha_Evento_Contratos
 * @property string $Fecha_Entrega_Contratos
 * @property string $Motivo_Contratos
 * @property string $Hora_Inicio_Contratos
 * @property string $Hora_Fin_Contratos
 * @property integer $Gasto_Adicional_Contratos
 * @property integer $Status_Contratos
 * @property string $Observaciones_Contratos
 * @property integer $Clientes_idClientes_Contratos
 * @property integer $Iglesias_idIglesias_Contratos
 * @property integer $Paquetes_idPaquetes_Contratos
 * @property integer $Salones_idSalones_Contratos
 *
 * The followings are the available model relations:
 * @property Abonoscontratos[] $abonoscontratoses
 * @property Asignaempleados[] $asignaempleadoses
 * @property Asignaequipo[] $asignaequipos
 * @property Clientes $clientesIdClientesContratos
 * @property Iglesias $iglesiasIdIglesiasContratos
 * @property Paquetes $paquetesIdPaquetesContratos
 * @property Salones $salonesIdSalonesContratos
 * @property Contratosproductos[] $contratosproductoses
 * @property Servicioscontratos[] $servicioscontratoses
 */
class Contratos extends CActiveRecord
{

	public function behaviors()
	{
		return array(
			'GPuntos' => array(
				'class' => 'ext.puntos.GPuntos',
				'campos' => 'Gasto_Adicional_Contratos',
				'separador' => '.',
				),
		);
	}

	public static $statuscontratos=array(''=>'','0'=>'Pendiente','1'=>'Editando','2'=>'Terminado','3'=>'Entregado');


	public $campo;
	public $RFC;
	public $actualizar_estado;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contratos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Clientes_idClientes_Contratos', 'required'),
			array('Gasto_Adicional_Contratos, Status_Contratos, Clientes_idClientes_Contratos, Iglesias_idIglesias_Contratos, Paquetes_idPaquetes_Contratos, Salones_idSalones_Contratos', 'numerical', 'integerOnly'=>true),
			array('Motivo_Contratos', 'length', 'max'=>45),
			array('Hora_Inicio_Contratos, Hora_Fin_Contratos', 'length', 'max'=>10),
			array('Observaciones_Contratos', 'length', 'max'=>255),
			array('Fecha_Contratos, Fecha_Evento_Contratos, Fecha_Entrega_Contratos', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idContratos, Fecha_Contratos, Fecha_Evento_Contratos, Fecha_Entrega_Contratos, Motivo_Contratos, Hora_Inicio_Contratos, Hora_Fin_Contratos, Gasto_Adicional_Contratos, Status_Contratos, Observaciones_Contratos, Clientes_idClientes_Contratos, Iglesias_idIglesias_Contratos, Paquetes_idPaquetes_Contratos, Salones_idSalones_Contratos', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'abonoscontratoses' => array(self::HAS_MANY, 'Abonoscontratos', 'contratos_idContratos'),
			'asignaempleadoses' => array(self::HAS_MANY, 'Asignaempleados', 'contratos_idContratos_Asignaempleados'),
			'asignaequipos' => array(self::HAS_MANY, 'Asignaequipo', 'Contratos_idContratos_Asignaequipo'),
			'clientesIdClientesContratos' => array(self::BELONGS_TO, 'Clientes', 'Clientes_idClientes_Contratos'),
			'iglesiasIdIglesiasContratos' => array(self::BELONGS_TO, 'Iglesias', 'Iglesias_idIglesias_Contratos'),
			'paquetesIdPaquetesContratos' => array(self::BELONGS_TO, 'Paquetes', 'Paquetes_idPaquetes_Contratos'),
			'salonesIdSalonesContratos' => array(self::BELONGS_TO, 'Salones', 'Salones_idSalones_Contratos'),
			'contratosproductoses' => array(self::HAS_MANY, 'Contratosproductos', 'contratos_idContratos'),
			'servicioscontratoses' => array(self::HAS_MANY, 'Servicioscontratos', 'Contratos_idContratos_Servicioscontratos'),
		);
	}

	// NOTE: Metodo para la seleccion del campo STATUS
	public static function getStatusContratos($keyst=null)
	{
		if($keyst!==null)
			return self::$statuscontratos[$keyst];
		return self::$statuscontratos;
	}


	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idContratos' => 'ID',
			'Fecha_Contratos' => 'Fecha',
			'Fecha_Evento_Contratos' => 'Dia Evento',
			'Fecha_Entrega_Contratos' => 'Entrega',
			'Motivo_Contratos' => 'Motivo',
			'Hora_Inicio_Contratos' => 'Inicio',
			'Hora_Fin_Contratos' => 'Fin',
			'Gasto_Adicional_Contratos' => 'Adicional',
			'Status_Contratos' => 'Status',
			'Observaciones_Contratos' => 'Observaciones',
			'Clientes_idClientes_Contratos' => 'Cliente',
			'Iglesias_idIglesias_Contratos' => 'Iglesia',
			'Paquetes_idPaquetes_Contratos' => 'Paquete',
			'Salones_idSalones_Contratos' => 'Salon',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idContratos',$this->idContratos);
		$criteria->compare('Fecha_Contratos',$this->Fecha_Contratos,true);
		$criteria->compare('Fecha_Evento_Contratos',$this->Fecha_Evento_Contratos,true);
		$criteria->compare('Fecha_Entrega_Contratos',$this->Fecha_Entrega_Contratos,true);
		$criteria->compare('Motivo_Contratos',$this->Motivo_Contratos,true);
		$criteria->compare('Hora_Inicio_Contratos',$this->Hora_Inicio_Contratos,true);
		$criteria->compare('Hora_Fin_Contratos',$this->Hora_Fin_Contratos,true);
		$criteria->compare('Gasto_Adicional_Contratos',$this->Gasto_Adicional_Contratos);
		$criteria->compare('Status_Contratos',$this->Status_Contratos);
		$criteria->compare('Observaciones_Contratos',$this->Observaciones_Contratos,true);
		$criteria->compare('Clientes_idClientes_Contratos',$this->Clientes_idClientes_Contratos);
		$criteria->compare('Iglesias_idIglesias_Contratos',$this->Iglesias_idIglesias_Contratos);
		$criteria->compare('Paquetes_idPaquetes_Contratos',$this->Paquetes_idPaquetes_Contratos);
		$criteria->compare('Salones_idSalones_Contratos',$this->Salones_idSalones_Contratos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contratos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
