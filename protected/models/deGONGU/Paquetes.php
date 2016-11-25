<?php

/**
 * This is the model class for table "paquetes".
 *
 * The followings are the available columns in table 'paquetes':
 * @property integer $idPaquetes
 * @property string $Nombre_Paquetes
 * @property string $Contenido_Paquetes
 * @property integer $Costo_Paquetes
 *
 * The followings are the available model relations:
 * @property Contratos[] $contratoses
 */
class Paquetes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paquetes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Costo_Paquetes', 'numerical', 'integerOnly'=>true),
			array('Nombre_Paquetes', 'length', 'max'=>45),
			array('Contenido_Paquetes', 'length', 'max'=>245),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPaquetes, Nombre_Paquetes, Contenido_Paquetes, Costo_Paquetes', 'safe', 'on'=>'search'),
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
			'contratoses' => array(self::HAS_MANY, 'Contratos', 'Paquetes_idPaquetes_Contratos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPaquetes' => 'ID',
			'Nombre_Paquetes' => 'Nombre',
			'Contenido_Paquetes' => 'Contenido',
			'Costo_Paquetes' => 'Costo',
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

		$criteria->compare('idPaquetes',$this->idPaquetes);
		$criteria->compare('Nombre_Paquetes',$this->Nombre_Paquetes,true);
		$criteria->compare('Contenido_Paquetes',$this->Contenido_Paquetes,true);
		$criteria->compare('Costo_Paquetes',$this->Costo_Paquetes);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paquetes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
