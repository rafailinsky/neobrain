<?php

/**
 * This is the model class for table "servicios".
 *
 * The followings are the available columns in table 'servicios':
 * @property integer $idservicios
 * @property string $Nombre_Servicios
 * @property string $Descripcion_Servicios
 * @property double $Costo_Servicios
 *
 * The followings are the available model relations:
 * @property Contratos[] $contratoses
 * @property Entradas[] $entradases
 */
class Servicios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'servicios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Costo_Servicios', 'numerical'),
			array('Nombre_Servicios', 'length', 'max'=>45),
			array('Descripcion_Servicios', 'length', 'max'=>245),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idservicios, Nombre_Servicios, Descripcion_Servicios, Costo_Servicios', 'safe', 'on'=>'search'),
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
			'contratoses' => array(self::MANY_MANY, 'Contratos', 'contratosxservicios(servicios_idservicios_contratosxservicios, contratos_idContratos_contratosxservicios)'),
			'entradases' => array(self::MANY_MANY, 'Entradas', 'entradasxservicios(servicios_idservicios_entradasxservicios, entradas_idEntradas_entradasxservicios)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idservicios' => 'Idservicios',
			'Nombre_Servicios' => 'Nombre Servicios',
			'Descripcion_Servicios' => 'Descripcion Servicios',
			'Costo_Servicios' => 'Costo Servicios',
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

		$criteria->compare('idservicios',$this->idservicios);
		$criteria->compare('Nombre_Servicios',$this->Nombre_Servicios,true);
		$criteria->compare('Descripcion_Servicios',$this->Descripcion_Servicios,true);
		$criteria->compare('Costo_Servicios',$this->Costo_Servicios);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Servicios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
