<?php

/**
 * This is the model class for table "equipotrabajo".
 *
 * The followings are the available columns in table 'equipotrabajo':
 * @property integer $idequipotrabajo
 * @property integer $Tipo
 * @property integer $Marca
 * @property string $Modelo
 * @property string $Numero_Serie
 * @property string $Descripcion
 *
 * The followings are the available model relations:
 * @property Contratos[] $contratoses
 */
class Equipotrabajo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'equipotrabajo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tipo, Marca', 'numerical', 'integerOnly'=>true),
			array('Modelo', 'length', 'max'=>25),
			array('Numero_Serie', 'length', 'max'=>45),
			array('Descripcion', 'length', 'max'=>245),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idequipotrabajo, Tipo, Marca, Modelo, Numero_Serie, Descripcion', 'safe', 'on'=>'search'),
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
			'contratoses' => array(self::MANY_MANY, 'Contratos', 'contratosxequipotrabajo(equipotrabajo_idequipotrabajo, contratos_idContratos)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idequipotrabajo' => 'Idequipotrabajo',
			'Tipo' => 'Tipo',
			'Marca' => 'Marca',
			'Modelo' => 'Modelo',
			'Numero_Serie' => 'Numero Serie',
			'Descripcion' => 'Descripcion',
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

		$criteria->compare('idequipotrabajo',$this->idequipotrabajo);
		$criteria->compare('Tipo',$this->Tipo);
		$criteria->compare('Marca',$this->Marca);
		$criteria->compare('Modelo',$this->Modelo,true);
		$criteria->compare('Numero_Serie',$this->Numero_Serie,true);
		$criteria->compare('Descripcion',$this->Descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Equipotrabajo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
