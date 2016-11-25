<?php

/**
 * This is the model class for table "equipos".
 *
 * The followings are the available columns in table 'equipos':
 * @property integer $idEquipos
 * @property string $Caracteristicas_Equipos
 * @property string $Numero_Serie_Equipos
 * @property string $N_Serie_Cargador_Equipos
 * @property string $Numero_Serie_Bateria_Equipos
 * @property integer $Status_Equipos
 * @property integer $Clientes_idClientes_Equipos
 * @property integer $Tipos_idTipos_Equipos
 * @property integer $Marcas_idMarcas_Equipos
 * @property integer $Modelos_idModelos_Equipos
 *
 * The followings are the available model relations:
 * @property Entradas[] $entradases
 * @property Clientes $clientesIdClientesEquipos
 * @property Marcas $marcasIdMarcasEquipos
 * @property Modelos $modelosIdModelosEquipos
 * @property Tipos $tiposIdTiposEquipos
 */
class Equipos extends CActiveRecord
{

	public static $statusequipos=array(''=>'','0'=>'Entregado','1'=>'En Taller');

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'equipos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Clientes_idClientes_Equipos, Tipos_idTipos_Equipos, Marcas_idMarcas_Equipos, Modelos_idModelos_Equipos', 'required'),
			array('Status_Equipos, Clientes_idClientes_Equipos, Tipos_idTipos_Equipos, Marcas_idMarcas_Equipos, Modelos_idModelos_Equipos', 'numerical', 'integerOnly'=>true),
			array('Caracteristicas_Equipos', 'length', 'max'=>245),
			array('Numero_Serie_Equipos, N_Serie_Cargador_Equipos', 'length', 'max'=>25),
			array('Numero_Serie_Bateria_Equipos', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEquipos, Caracteristicas_Equipos, Numero_Serie_Equipos, N_Serie_Cargador_Equipos, Numero_Serie_Bateria_Equipos, Status_Equipos, Clientes_idClientes_Equipos, Tipos_idTipos_Equipos, Marcas_idMarcas_Equipos, Modelos_idModelos_Equipos', 'safe', 'on'=>'search'),
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
			'entradases' => array(self::HAS_MANY, 'Entradas', 'Equipos_idEquipos_Entradas'),
			'clientesIdClientesEquipos' => array(self::BELONGS_TO, 'Clientes', 'Clientes_idClientes_Equipos'),
			'marcasIdMarcasEquipos' => array(self::BELONGS_TO, 'Marcas', 'Marcas_idMarcas_Equipos'),
			'modelosIdModelosEquipos' => array(self::BELONGS_TO, 'Modelos', 'Modelos_idModelos_Equipos'),
			'tiposIdTiposEquipos' => array(self::BELONGS_TO, 'Tipos', 'Tipos_idTipos_Equipos'),
		);
	}

	// NOTE: Metodo para la seleccion del campo STATUS
	public static function getStatusEquipos($keyst=null)
	{
		if($keyst!==null)
			return self::$statusequipos[$keyst];
		return self::$statusequipos;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEquipos' => 'ID',
			'Caracteristicas_Equipos' => 'Carac',
			'Numero_Serie_Equipos' => 'N°S',
			'N_Serie_Cargador_Equipos' => 'N°S Carg',
			'Numero_Serie_Bateria_Equipos' => 'N°S Bat',
			'Status_Equipos' => 'Status',
			'Clientes_idClientes_Equipos' => 'Clie',
			'Tipos_idTipos_Equipos' => 'Tipo',
			'Marcas_idMarcas_Equipos' => 'Marca',
			'Modelos_idModelos_Equipos' => 'Mod',
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

		$criteria->compare('idEquipos',$this->idEquipos);
		$criteria->compare('Caracteristicas_Equipos',$this->Caracteristicas_Equipos,true);
		$criteria->compare('Numero_Serie_Equipos',$this->Numero_Serie_Equipos,true);
		$criteria->compare('N_Serie_Cargador_Equipos',$this->N_Serie_Cargador_Equipos,true);
		$criteria->compare('Numero_Serie_Bateria_Equipos',$this->Numero_Serie_Bateria_Equipos,true);
		$criteria->compare('Status_Equipos',$this->Status_Equipos);
		$criteria->compare('Clientes_idClientes_Equipos',$this->Clientes_idClientes_Equipos);
		$criteria->compare('Tipos_idTipos_Equipos',$this->Tipos_idTipos_Equipos);
		$criteria->compare('Marcas_idMarcas_Equipos',$this->Marcas_idMarcas_Equipos);
		$criteria->compare('Modelos_idModelos_Equipos',$this->Modelos_idModelos_Equipos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Equipos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
