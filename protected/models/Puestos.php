<?php

/**
 * This is the model class for table "Puestos".
 *
 * The followings are the available columns in table 'Puestos':
 * @property integer $idPuestos
 * @property string $Nombre_Puestos
 * @property string $Nivel_Puestos
 * @property string $Departamento_Puestos
 * @property integer $Sueldo_Puestos
 *
 * The followings are the available model relations:
 * @property Empleados[] $empleadoses
 */
class Puestos extends CActiveRecord
{

	public static $NiveldePuesto=array(''=>'','0'=>'Uno','1'=>'Dos','2'=>'Tres','3'=>'Cuatro');


	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Puestos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre_Puestos', 'required'),
			array('Sueldo_Puestos', 'numerical', 'integerOnly'=>true),
			array('Nombre_Puestos, Nivel_Puestos, Departamento_Puestos', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPuestos, Nombre_Puestos, Nivel_Puestos, Departamento_Puestos, Sueldo_Puestos', 'safe', 'on'=>'search'),
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
			'empleadoses' => array(self::HAS_MANY, 'Empleados', 'Puestos_idPuestos_Empleados'),
		);
	}


	// NOTE: Metodo para la seleccion del campo STATUS
	public static function getStatusNiveldePuesto($keyst=null)
	{
		if($keyst!==null)
			return self::$NiveldePuesto[$keyst];
		return self::$NiveldePuesto;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPuestos' => 'ID',
			'Nombre_Puestos' => 'Nombre',
			'Nivel_Puestos' => 'Nivel',
			'Departamento_Puestos' => 'Departamento',
			'Sueldo_Puestos' => 'Sueldo',
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

		$criteria->compare('idPuestos',$this->idPuestos);
		$criteria->compare('Nombre_Puestos',$this->Nombre_Puestos,true);
		$criteria->compare('Nivel_Puestos',$this->Nivel_Puestos,true);
		$criteria->compare('Departamento_Puestos',$this->Departamento_Puestos,true);
		$criteria->compare('Sueldo_Puestos',$this->Sueldo_Puestos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Puestos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
