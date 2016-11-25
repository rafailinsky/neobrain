<?php

/**
 * This is the model class for table "soportes".
 *
 * The followings are the available columns in table 'soportes':
 * @property integer $idSoportes
 * @property string $FechaIngreso_Soportes
 * @property string $FechaEntrega_Soportes
 * @property string $Observaciones_Cliente_Soportes
 * @property string $Prediagnostico_Soportes
 * @property string $Costo_Soportes
 * @property integer $Status_Soportes
 * @property integer $Clientes_idClientes_Soportes
 * @property integer $Servicios_idServicio_Soportes
 * @property integer $Equipos_idEquipos_Soportes
 * @property string $Datos_Entrada_Soportes
 * @property string $Partes_Da単adas_Soportes
 * @property string $Fallas_Equipo_Soportes
 *
 * The followings are the available model relations:
 * @property Abonos[] $abonoses
 * @property Clientes $clientesIdClientesSoportes
 * @property Equipos $equiposIdEquiposSoportes
 * @property Servicios $serviciosIdServicioSoportes
 */
class Soportes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'soportes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idSoportes, Clientes_idClientes_Soportes, Equipos_idEquipos_Soportes', 'required'),
			array('idSoportes, Status_Soportes, Clientes_idClientes_Soportes, Servicios_idServicio_Soportes, Equipos_idEquipos_Soportes', 'numerical', 'integerOnly'=>true),
			array('Observaciones_Cliente_Soportes', 'length', 'max'=>145),
			array('Prediagnostico_Soportes', 'length', 'max'=>245),
			array('Costo_Soportes', 'length', 'max'=>11),
			array('Datos_Entrada_Soportes, Partes_Da単adas_Soportes, Fallas_Equipo_Soportes', 'length', 'max'=>45),
			array('FechaIngreso_Soportes, FechaEntrega_Soportes', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idSoportes, FechaIngreso_Soportes, FechaEntrega_Soportes, Observaciones_Cliente_Soportes, Prediagnostico_Soportes, Costo_Soportes, Status_Soportes, Clientes_idClientes_Soportes, Servicios_idServicio_Soportes, Equipos_idEquipos_Soportes, Datos_Entrada_Soportes, Partes_Da単adas_Soportes, Fallas_Equipo_Soportes', 'safe', 'on'=>'search'),
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
			'abonoses' => array(self::HAS_MANY, 'Abonos', 'Soportes_idDiagnosticos_Abonos'),
			'clientesIdClientesSoportes' => array(self::BELONGS_TO, 'Clientes', 'Clientes_idClientes_Soportes'),
			'equiposIdEquiposSoportes' => array(self::BELONGS_TO, 'Equipos', 'Equipos_idEquipos_Soportes'),
			'serviciosIdServicioSoportes' => array(self::BELONGS_TO, 'Servicios', 'Servicios_idServicio_Soportes'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSoportes' => 'Id Soportes',
			'FechaIngreso_Soportes' => 'Fecha Ingreso Soportes',
			'FechaEntrega_Soportes' => 'Fecha Entrega Soportes',
			'Observaciones_Cliente_Soportes' => 'Observaciones Cliente Soportes',
			'Prediagnostico_Soportes' => 'Prediagnostico Soportes',
			'Costo_Soportes' => 'Costo Soportes',
			'Status_Soportes' => 'Status Soportes',
			'Clientes_idClientes_Soportes' => 'Clientes Id Clientes Soportes',
			'Servicios_idServicio_Soportes' => 'Servicios Id Servicio Soportes',
			'Equipos_idEquipos_Soportes' => 'Equipos Id Equipos Soportes',
			'Datos_Entrada_Soportes' => 'Datos Entrada Soportes',
			'Partes_Da単adas_Soportes' => 'Partes Da祓adas Soportes',
			'Fallas_Equipo_Soportes' => 'Fallas Equipo Soportes',
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

		$criteria->compare('idSoportes',$this->idSoportes);
		$criteria->compare('FechaIngreso_Soportes',$this->FechaIngreso_Soportes,true);
		$criteria->compare('FechaEntrega_Soportes',$this->FechaEntrega_Soportes,true);
		$criteria->compare('Observaciones_Cliente_Soportes',$this->Observaciones_Cliente_Soportes,true);
		$criteria->compare('Prediagnostico_Soportes',$this->Prediagnostico_Soportes,true);
		$criteria->compare('Costo_Soportes',$this->Costo_Soportes,true);
		$criteria->compare('Status_Soportes',$this->Status_Soportes);
		$criteria->compare('Clientes_idClientes_Soportes',$this->Clientes_idClientes_Soportes);
		$criteria->compare('Servicios_idServicio_Soportes',$this->Servicios_idServicio_Soportes);
		$criteria->compare('Equipos_idEquipos_Soportes',$this->Equipos_idEquipos_Soportes);
		$criteria->compare('Datos_Entrada_Soportes',$this->Datos_Entrada_Soportes,true);
		$criteria->compare('Partes_Da単adas_Soportes',$this->Partes_Da単adas_Soportes,true);
		$criteria->compare('Fallas_Equipo_Soportes',$this->Fallas_Equipo_Soportes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Soportes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
