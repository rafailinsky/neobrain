<?php

/**
 * This is the model class for table "entradas".
 *
 * The followings are the available columns in table 'entradas':
 * @property integer $idEntradas
 * @property string $Fecha_Ingreso_Entradas
 * @property string $Fecha_Entrega_Entradas
 * @property string $Observaciones_Cliente_Entradas
 * @property string $Prediagnostico_Entradas
 * @property string $Datos_Entrada_Entradas
 * @property string $Partes_Dañadas_Entradas
 * @property string $Fallas_Equipo_Entradas
 * @property integer $Equipos_idEquipos_Entradas
 * @property integer $Clientes_idClientes_Entradas
 * @property integer $Status_Entradas
 * @property integer $empleados_idEmpleados
 *
 * The followings are the available model relations:
 * @property Abonosentradas[] $abonosentradases
 * @property Clientes $clientesIdClientesEntradas
 * @property Empleados $empleadosIdEmpleados
 * @property Equipos $equiposIdEquiposEntradas
 * @property Entradasproductos[] $entradasproductoses
 * @property Salidas[] $salidases
 * @property Serviciosentradas[] $serviciosentradases
 */
class Entradas extends CActiveRecord
{

	public static $statusEntradas=array(''=>'','0'=>'Sin Revisar','1'=>'En Reparacion','2'=>'Rep. Terminada','3'=>'Rep. Terminada','4'=>'Sin Reparacion');

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'entradas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Equipos_idEquipos_Entradas, Clientes_idClientes_Entradas, empleados_idEmpleados', 'required'),
			array('Equipos_idEquipos_Entradas, Clientes_idClientes_Entradas, Status_Entradas, empleados_idEmpleados', 'numerical', 'integerOnly'=>true),
			array('Observaciones_Cliente_Entradas', 'length', 'max'=>145),
			array('Prediagnostico_Entradas', 'length', 'max'=>245),
			array('Datos_Entrada_Entradas, Partes_Dañadas_Entradas, Fallas_Equipo_Entradas', 'length', 'max'=>45),
			array('Fecha_Ingreso_Entradas, Fecha_Entrega_Entradas', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEntradas, Fecha_Ingreso_Entradas, Fecha_Entrega_Entradas, Observaciones_Cliente_Entradas, Prediagnostico_Entradas, Datos_Entrada_Entradas, Partes_Dañadas_Entradas, Fallas_Equipo_Entradas, Equipos_idEquipos_Entradas, Clientes_idClientes_Entradas, Status_Entradas, empleados_idEmpleados', 'safe', 'on'=>'search'),
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
			'abonosentradases' => array(self::HAS_MANY, 'Abonosentradas', 'entradas_idEntradas'),
			'clientesIdClientesEntradas' => array(self::BELONGS_TO, 'Clientes', 'Clientes_idClientes_Entradas'),
			'empleadosIdEmpleados' => array(self::BELONGS_TO, 'Empleados', 'empleados_idEmpleados'),
			'equiposIdEquiposEntradas' => array(self::BELONGS_TO, 'Equipos', 'Equipos_idEquipos_Entradas'),
			'entradasproductoses' => array(self::HAS_MANY, 'Entradasproductos', 'Entradas_idEntradas_Entradasproductos'),
			'salidases' => array(self::HAS_MANY, 'Salidas', 'entradas_idEntradas'),
			'serviciosentradases' => array(self::HAS_MANY, 'Serviciosentradas', 'Entradas_idEntradas_Serviciosentradas'),
		);
	}

	// NOTE: Metodo para la seleccion del campo STATUS
	public static function getStatusEntradas($keyst=null)
	{
		if($keyst!==null)
			return self::$statusEntradas[$keyst];
		return self::$statusEntradas;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(

			'idEntradas' => 'ID',
			'Fecha_Ingreso_Entradas' => 'Ingreso',
			'Fecha_Entrega_Entradas' => 'Entrega',
			'Observaciones_Cliente_Entradas' => 'Obs',
			'Prediagnostico_Entradas' => 'Pred',
			'Datos_Entrada_Entradas' => 'Datos',
			'Partes_Dañadas_Entradas' => 'Da�o',
			'Fallas_Equipo_Entradas' => 'Fallas',
			'Equipos_idEquipos_Entradas' => 'Equipo',
			'Clientes_idClientes_Entradas' => 'Cliente',
			'Status_Entradas' => 'Status',
			'Empleados_idEmpleados_Entradas' => 'Tecnico',
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

		$criteria->compare('idEntradas',$this->idEntradas);
		$criteria->compare('Fecha_Ingreso_Entradas',$this->Fecha_Ingreso_Entradas,true);
		$criteria->compare('Fecha_Entrega_Entradas',$this->Fecha_Entrega_Entradas,true);
		$criteria->compare('Observaciones_Cliente_Entradas',$this->Observaciones_Cliente_Entradas,true);
		$criteria->compare('Prediagnostico_Entradas',$this->Prediagnostico_Entradas,true);
		$criteria->compare('Datos_Entrada_Entradas',$this->Datos_Entrada_Entradas,true);
		$criteria->compare('Partes_Dañadas_Entradas',$this->Partes_Dañadas_Entradas,true);
		$criteria->compare('Fallas_Equipo_Entradas',$this->Fallas_Equipo_Entradas,true);
		$criteria->compare('Equipos_idEquipos_Entradas',$this->Equipos_idEquipos_Entradas);
		$criteria->compare('Clientes_idClientes_Entradas',$this->Clientes_idClientes_Entradas);
		$criteria->compare('Status_Entradas',$this->Status_Entradas);
		$criteria->compare('Empleados_idEmpleados_Entradas',$this->Empleados_idEmpleados_Entradas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getMenuClientes()
	{
		$clientes=Clientes::model()->findAll("Status_Clientes=?",array(1));
		return Chtml::listData($clientes,"idClientes", "Nombre_Clientes");
	}

	public function getMenuEquipos($defaultCliente=1)
	{
		$equipos=Equipos::model()->findAll("Status_Equipos=? AND Clientes_idClientes_Equipos=?",array(1,$defaultCliente=1));
		return Chtml::listData($equipos,"idEquipos", "Numero_Serie_Equipos");
	}	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Entradas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
