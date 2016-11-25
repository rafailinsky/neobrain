<?php

/**
 * This is the model class for table "salidas".
 *
 * The followings are the available columns in table 'salidas':
 * @property integer $idSalidas
 * @property string $Fecha_Salida_Salidas
 * @property integer $entradas_idEntradas
 *
 * The followings are the available model relations:
 * @property Entradas $entradasIdEntradas
 */
class Salidas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'salidas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entradas_idEntradas', 'required'),
			array('entradas_idEntradas', 'numerical', 'integerOnly'=>true),
			array('Fecha_Salida_Salidas', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idSalidas, Fecha_Salida_Salidas, entradas_idEntradas', 'safe', 'on'=>'search'),
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
			'entradasIdEntradas' => array(self::BELONGS_TO, 'Entradas', 'entradas_idEntradas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSalidas' => 'Id Salidas',
			'Fecha_Salida_Salidas' => 'Fecha Salida Salidas',
			'entradas_idEntradas' => 'Entradas Id Entradas',
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

		$criteria->compare('idSalidas',$this->idSalidas);
		$criteria->compare('Fecha_Salida_Salidas',$this->Fecha_Salida_Salidas,true);
		$criteria->compare('entradas_idEntradas',$this->entradas_idEntradas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Salidas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
