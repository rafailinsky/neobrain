<?php

/**
 * This is the model class for table "abonos".
 *
 * The followings are the available columns in table 'abonos':
 * @property integer $idAbonos
 * @property string $Cantidad_Abonos
 * @property string $Fecha_Abonos
 *
 * The followings are the available model relations:
 * @property Contratos[] $contratoses
 * @property Entradas[] $entradases
 */
class Abonos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'abonos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cantidad_Abonos', 'length', 'max'=>6),
			array('Fecha_Abonos', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAbonos, Cantidad_Abonos, Fecha_Abonos', 'safe', 'on'=>'search'),
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
			'contratoses' => array(self::MANY_MANY, 'Contratos', 'contratosxabonos(abonos_idAbonos_contratosxabonos, contratos_idContratos_contratosxabonos)'),
			'entradases' => array(self::MANY_MANY, 'Entradas', 'entradasxabonos(abonos_idAbonos_entradasxabonos, entradas_idEntradas_entradasxabonos)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAbonos' => 'Id Abonos',
			'Cantidad_Abonos' => 'Cantidad Abonos',
			'Fecha_Abonos' => 'Fecha Abonos',
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

		$criteria->compare('idAbonos',$this->idAbonos);
		$criteria->compare('Cantidad_Abonos',$this->Cantidad_Abonos,true);
		$criteria->compare('Fecha_Abonos',$this->Fecha_Abonos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Abonos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
