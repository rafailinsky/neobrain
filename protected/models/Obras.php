<?php

/**
 * This is the model class for table "Obras".
 *
 * The followings are the available columns in table 'Obras':
 * @property integer $idObras
 * @property string $Nombre_Obras
 * @property integer $Empresas_idEmpresas_Obras
 *
 * The followings are the available model relations:
 * @property Empleados[] $empleadoses
 * @property Empresas $empresasIdEmpresasObras
 */
class Obras extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Obras';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Empresas_idEmpresas_Obras', 'required'),
			array('Empresas_idEmpresas_Obras', 'numerical', 'integerOnly'=>true),
			array('Nombre_Obras', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idObras, Nombre_Obras, Empresas_idEmpresas_Obras', 'safe', 'on'=>'search'),
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
			'empleadoses' => array(self::HAS_MANY, 'Empleados', 'Obras_idObras_Empleados'),
			'empresasIdEmpresasObras' => array(self::BELONGS_TO, 'Empresas', 'Empresas_idEmpresas_Obras'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idObras' => 'ID',
			'Nombre_Obras' => 'Nombre',
			'Empresas_idEmpresas_Obras' => 'Empresa',
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

		$criteria->compare('idObras',$this->idObras);
		$criteria->compare('Nombre_Obras',$this->Nombre_Obras,true);
		$criteria->compare('Empresas_idEmpresas_Obras',$this->Empresas_idEmpresas_Obras);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Obras the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
