<?php

/**
 * This is the model class for table "salones".
 *
 * The followings are the available columns in table 'salones':
 * @property integer $idSalones
 * @property string $Nombre_Salones
 * @property string $Direccion_Salones
 *
 * The followings are the available model relations:
 * @property Contratos[] $contratoses
 */
class Salones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'salones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre_Salones', 'required'),
			array('Nombre_Salones', 'length', 'max'=>45),
			array('Direccion_Salones', 'length', 'max'=>245),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idSalones, Nombre_Salones, Direccion_Salones', 'safe', 'on'=>'search'),
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
			'contratoses' => array(self::HAS_MANY, 'Contratos', 'Salones_idSalones_Contratos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSalones' => 'ID',
			'Nombre_Salones' => 'Nombre',
			'Direccion_Salones' => 'Direccion',
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

		$criteria->compare('idSalones',$this->idSalones);
		$criteria->compare('Nombre_Salones',$this->Nombre_Salones,true);
		$criteria->compare('Direccion_Salones',$this->Direccion_Salones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Salones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
