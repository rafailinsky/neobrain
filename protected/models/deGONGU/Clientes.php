<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property integer $idClientes
 * @property string $RFC_Clientes
 * @property string $Nombre_Clientes
 * @property string $Telefono_Clientes
 * @property string $Celular_Clientes
 * @property string $Correo_Clientes
 * @property string $Direccion_Clientes
 * @property string $Colonia_Clientes
 * @property integer $CP_Clientes
 * @property string $Ciudad_Clientes
 * @property string $Estado_Clientes
 * @property string $Medio_Publicitario_Clientes
 * @property integer $Status_Clientes
 *
 * The followings are the available model relations:
 * @property Contratos[] $contratoses
 * @property Entradas[] $entradases
 * @property Equipos[] $equiposes
 * @property Ventas[] $ventases
 * @property Ventasmayoreo[] $ventasmayoreos
 */
class Clientes extends CActiveRecord
{

	public static $statusClientes=array(''=>'','0'=>'Inactivo','1'=>'Activo');
	

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RFC_Clientes', 'required'),
			array('CP_Clientes, Status_Clientes', 'numerical', 'integerOnly'=>true),
			array('RFC_Clientes, Telefono_Clientes, Celular_Clientes', 'length', 'max'=>15),
			array('Nombre_Clientes', 'length', 'max'=>255),
			array('Correo_Clientes', 'length', 'max'=>20),
			array('Direccion_Clientes', 'length', 'max'=>35),
			array('Colonia_Clientes', 'length', 'max'=>45),
			array('Ciudad_Clientes, Estado_Clientes', 'length', 'max'=>10),
			array('Medio_Publicitario_Clientes', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idClientes, RFC_Clientes, Nombre_Clientes, Telefono_Clientes, Celular_Clientes, Correo_Clientes, Direccion_Clientes, Colonia_Clientes, CP_Clientes, Ciudad_Clientes, Estado_Clientes, Medio_Publicitario_Clientes, Status_Clientes', 'safe', 'on'=>'search'),
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
			'contratoses' => array(self::HAS_MANY, 'Contratos', 'Clientes_idClientes_Contratos'),
			'entradases' => array(self::HAS_MANY, 'Entradas', 'Clientes_idClientes_Entradas'),
			'equiposes' => array(self::HAS_MANY, 'Equipos', 'Clientes_idClientes_Equipos'),
			'ventases' => array(self::HAS_MANY, 'Ventas', 'clientes_idClientes'),
			'ventasmayoreos' => array(self::HAS_MANY, 'Ventasmayoreo', 'Clientes_idClientes_Ventasmayoreo'),
		);
	}

	// NOTE: Metodo para la seleccion del campo STATUS
	public static function getStatusClientes($keyst=null)
	{
		if($keyst!==null)
			return self::$statusClientes[$keyst];
		return self::$statusClientes;
	}


	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idClientes' => 'ID',
			'RFC_Clientes' => 'RFC',
			'Nombre_Clientes' => 'Nombre',
			'Telefono_Clientes' => 'Tel.',
			'Celular_Clientes' => 'Cel.',
			'Correo_Clientes' => 'Mail',
			'Direccion_Clientes' => 'Dir.',
			'Colonia_Clientes' => 'Col.',
			'CP_Clientes' => 'CP',
			'Ciudad_Clientes' => 'Ciudad',
			'Estado_Clientes' => 'Estado',
			'Medio_Publicitario_Clientes' => 'Medio Pub.',
			'Status_Clientes' => 'Status',
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

		$criteria->compare('idClientes',$this->idClientes);
		$criteria->compare('RFC_Clientes',$this->RFC_Clientes,true);
		$criteria->compare('Nombre_Clientes',$this->Nombre_Clientes,true);
		$criteria->compare('Telefono_Clientes',$this->Telefono_Clientes,true);
		$criteria->compare('Celular_Clientes',$this->Celular_Clientes,true);
		$criteria->compare('Correo_Clientes',$this->Correo_Clientes,true);
		$criteria->compare('Direccion_Clientes',$this->Direccion_Clientes,true);
		$criteria->compare('Colonia_Clientes',$this->Colonia_Clientes,true);
		$criteria->compare('CP_Clientes',$this->CP_Clientes);
		$criteria->compare('Ciudad_Clientes',$this->Ciudad_Clientes,true);
		$criteria->compare('Estado_Clientes',$this->Estado_Clientes,true);
		$criteria->compare('Medio_Publicitario_Clientes',$this->Medio_Publicitario_Clientes,true);
		$criteria->compare('Status_Clientes',$this->Status_Clientes);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
