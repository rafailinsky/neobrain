<?php

/**
 * This is the model class for table "modelos".
 *
 * The followings are the available columns in table 'modelos':
 * @property integer $idModelos
 * @property integer $Nombre_Modelos
 * @property integer $marcas_idMarcas_Modelos
 *
 * The followings are the available model relations:
 * @property Equipos[] $equiposes
 * @property Marcas $marcasIdMarcasModelos
 */
class Modelos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modelos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('marcas_idMarcas_Modelos', 'required'),
			array('marcas_idMarcas_Modelos', 'numerical', 'integerOnly'=>true),
			array('Nombre_Modelos',  'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idModelos, Nombre_Modelos, marcas_idMarcas_Modelos', 'safe', 'on'=>'search'),
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
			'equiposes' => array(self::HAS_MANY, 'Equipos', 'Modelos_idModelos_Equipos'),
			'marcasIdMarcasModelos' => array(self::BELONGS_TO, 'Marcas', 'marcas_idMarcas_Modelos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idModelos' => 'ID',
			'Nombre_Modelos' => 'Nombre',
			'marcas_idMarcas_Modelos' => 'Marca',
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

		$criteria->compare('idModelos',$this->idModelos);
		$criteria->compare('Nombre_Modelos',$this->Nombre_Modelos);
		$criteria->compare('marcas_idMarcas_Modelos',$this->marcas_idMarcas_Modelos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Modelos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
