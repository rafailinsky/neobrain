<?php

/**
 * This is the model class for table "empleados".
 *
 * The followings are the available columns in table 'empleados':
 * @property integer $idempleados
 * @property string $Nombre_Empleados
 * @property string $Telefono_Empleados
 * @property string $Celular_Empleados
 * @property string $Correo_Empleados
 * @property string $Direccion_Empleados
 * @property string $Colonia_Empleados
 * @property integer $Status_Empleados
 * @property integer $Nivel_Empleados
 * @property integer $Cargo_Empleados
 *
 * The followings are the available model relations:
 * @property Contratos[] $contratoses
 */
class Empleados extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Status_Empleados, Nivel_Empleados, Cargo_Empleados', 'numerical', 'integerOnly'=>true),
			array('Nombre_Empleados', 'length', 'max'=>255),
			array('Telefono_Empleados, Celular_Empleados', 'length', 'max'=>15),
			array('Correo_Empleados', 'length', 'max'=>20),
			array('Direccion_Empleados', 'length', 'max'=>35),
			array('Colonia_Empleados', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idempleados, Nombre_Empleados, Telefono_Empleados, Celular_Empleados, Correo_Empleados, Direccion_Empleados, Colonia_Empleados, Status_Empleados, Nivel_Empleados, Cargo_Empleados', 'safe', 'on'=>'search'),
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
			'contratoses' => array(self::MANY_MANY, 'Contratos', 'contratosxempleados(empleados_idempleados, contratos_idContratos)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idempleados' => 'Idempleados',
			'Nombre_Empleados' => 'Nombre Empleados',
			'Telefono_Empleados' => 'Telefono Empleados',
			'Celular_Empleados' => 'Celular Empleados',
			'Correo_Empleados' => 'Correo Empleados',
			'Direccion_Empleados' => 'Direccion Empleados',
			'Colonia_Empleados' => 'Colonia Empleados',
			'Status_Empleados' => 'Status Empleados',
			'Nivel_Empleados' => 'Nivel Empleados',
			'Cargo_Empleados' => 'Cargo Empleados',
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

		$criteria->compare('idempleados',$this->idempleados);
		$criteria->compare('Nombre_Empleados',$this->Nombre_Empleados,true);
		$criteria->compare('Telefono_Empleados',$this->Telefono_Empleados,true);
		$criteria->compare('Celular_Empleados',$this->Celular_Empleados,true);
		$criteria->compare('Correo_Empleados',$this->Correo_Empleados,true);
		$criteria->compare('Direccion_Empleados',$this->Direccion_Empleados,true);
		$criteria->compare('Colonia_Empleados',$this->Colonia_Empleados,true);
		$criteria->compare('Status_Empleados',$this->Status_Empleados);
		$criteria->compare('Nivel_Empleados',$this->Nivel_Empleados);
		$criteria->compare('Cargo_Empleados',$this->Cargo_Empleados);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empleados the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
