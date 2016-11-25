<?php

/**
 * This is the model class for table "iglesias".
 *
 * The followings are the available columns in table 'iglesias':
 * @property integer $idIglesias
 * @property string $Nombre_Iglesias
 * @property string $Direccion_Iglesias
 *
 * The followings are the available model relations:
 * @property Contratos[] $contratoses
 */
class Iglesias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'iglesias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre_Iglesias', 'length', 'max'=>45),
			array('Direccion_Iglesias', 'length', 'max'=>245),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idIglesias, Nombre_Iglesias, Direccion_Iglesias', 'safe', 'on'=>'search'),
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
			'contratoses' => array(self::HAS_MANY, 'Contratos', 'Iglesias_idIglesias_Contratos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idIglesias' => 'Id Iglesias',
			'Nombre_Iglesias' => 'Nombre Iglesias',
			'Direccion_Iglesias' => 'Direccion Iglesias',
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

		$criteria->compare('idIglesias',$this->idIglesias);
		$criteria->compare('Nombre_Iglesias',$this->Nombre_Iglesias,true);
		$criteria->compare('Direccion_Iglesias',$this->Direccion_Iglesias,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Iglesias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
