<?php

/**
 * This is the model class for table "entradasxabonos".
 *
 * The followings are the available columns in table 'entradasxabonos':
 * @property integer $entradas_idEntradas_entradasxabonos
 * @property integer $abonos_idAbonos_entradasxabonos
 */
class Entradasxabonos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'entradasxabonos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entradas_idEntradas_entradasxabonos, abonos_idAbonos_entradasxabonos', 'required'),
			array('entradas_idEntradas_entradasxabonos, abonos_idAbonos_entradasxabonos', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('entradas_idEntradas_entradasxabonos, abonos_idAbonos_entradasxabonos', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'entradas_idEntradas_entradasxabonos' => 'Entradas Id Entradas Entradasxabonos',
			'abonos_idAbonos_entradasxabonos' => 'Abonos Id Abonos Entradasxabonos',
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

		$criteria->compare('entradas_idEntradas_entradasxabonos',$this->entradas_idEntradas_entradasxabonos);
		$criteria->compare('abonos_idAbonos_entradasxabonos',$this->abonos_idAbonos_entradasxabonos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Entradasxabonos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
