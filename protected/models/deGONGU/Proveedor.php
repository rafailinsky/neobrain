<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property integer $idProveedor
 * @property string $Nombre_Proveedor
 * @property string $Empresa_Proveedor
 * @property string $Direccion_Proveedor
 * @property string $Colonia_Proveedor
 * @property integer $CP_Proveedor
 * @property string $Correo_Proveedor
 * @property string $RFC_Proveedor
 *
 * The followings are the available model relations:
 * @property Productos[] $productoses
 */
class Proveedor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CP_Proveedor', 'numerical', 'integerOnly'=>true),
			array('Nombre_Proveedor', 'length', 'max'=>65),
			array('Empresa_Proveedor', 'length', 'max'=>35),
			array('Direccion_Proveedor, Colonia_Proveedor', 'length', 'max'=>55),
			array('Correo_Proveedor', 'length', 'max'=>25),
			array('RFC_Proveedor', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProveedor, Nombre_Proveedor, Empresa_Proveedor, Direccion_Proveedor, Colonia_Proveedor, CP_Proveedor, Correo_Proveedor, RFC_Proveedor', 'safe', 'on'=>'search'),
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
			'productoses' => array(self::HAS_MANY, 'Productos', 'Proveedor_idProveedor_Productos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProveedor' => 'Id Proveedor',
			'Nombre_Proveedor' => 'Nombre Proveedor',
			'Empresa_Proveedor' => 'Empresa Proveedor',
			'Direccion_Proveedor' => 'Direccion Proveedor',
			'Colonia_Proveedor' => 'Colonia Proveedor',
			'CP_Proveedor' => 'Cp Proveedor',
			'Correo_Proveedor' => 'Correo Proveedor',
			'RFC_Proveedor' => 'Rfc Proveedor',
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

		$criteria->compare('idProveedor',$this->idProveedor);
		$criteria->compare('Nombre_Proveedor',$this->Nombre_Proveedor,true);
		$criteria->compare('Empresa_Proveedor',$this->Empresa_Proveedor,true);
		$criteria->compare('Direccion_Proveedor',$this->Direccion_Proveedor,true);
		$criteria->compare('Colonia_Proveedor',$this->Colonia_Proveedor,true);
		$criteria->compare('CP_Proveedor',$this->CP_Proveedor);
		$criteria->compare('Correo_Proveedor',$this->Correo_Proveedor,true);
		$criteria->compare('RFC_Proveedor',$this->RFC_Proveedor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
