<?php

/**
 * This is the model class for table "Entradas".
 *
 * The followings are the available columns in table 'Entradas':
 * @property integer $idEntradas
 * @property string $Fecha_Entradas
 * @property string $Hora_Entradas
 * @property string $Imagen_Entradas
 * @property integer $Empleados_idEmpleados_Entradas
 *
 * The followings are the available model relations:
 * @property Empleados $empleadosIdEmpleadosEntradas
 */
class Entradas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Entradas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Empleados_idEmpleados_Entradas', 'required'),
			array('Empleados_idEmpleados_Entradas', 'numerical', 'integerOnly'=>true),
			array('Fecha_Entradas, Hora_Entradas', 'length', 'max'=>45),
			array('Imagen_Entradas', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEntradas, Fecha_Entradas, Hora_Entradas, Imagen_Entradas, Empleados_idEmpleados_Entradas', 'safe', 'on'=>'search'),
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
			'empleadosIdEmpleadosEntradas' => array(self::BELONGS_TO, 'Empleados', 'Empleados_idEmpleados_Entradas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEntradas' => 'Id Entradas',
			'Fecha_Entradas' => 'Fecha Entradas',
			'Hora_Entradas' => 'Hora Entradas',
			'Imagen_Entradas' => 'Imagen Entradas',
			'Empleados_idEmpleados_Entradas' => 'Empleados Id Empleados Entradas',
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

		$criteria->compare('idEntradas',$this->idEntradas);
		$criteria->compare('Fecha_Entradas',$this->Fecha_Entradas,true);
		$criteria->compare('Hora_Entradas',$this->Hora_Entradas,true);
		$criteria->compare('Imagen_Entradas',$this->Imagen_Entradas,true);
		$criteria->compare('Empleados_idEmpleados_Entradas',$this->Empleados_idEmpleados_Entradas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Entradas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
