<?php

/**
 * This is the model class for table "Salidas".
 *
 * The followings are the available columns in table 'Salidas':
 * @property integer $idSalidas
 * @property string $Fecha_Salidas
 * @property string $Hora_Salidas
 * @property string $Imagen_Salidas
 * @property integer $Empleados_idEmpleados_Salidas
 *
 * The followings are the available model relations:
 * @property Empleados $empleadosIdEmpleadosSalidas
 */
class Salidas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Salidas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Empleados_idEmpleados_Salidas', 'required'),
			array('Empleados_idEmpleados_Salidas', 'numerical', 'integerOnly'=>true),
			array('Fecha_Salidas, Hora_Salidas', 'length', 'max'=>45),
			array('Imagen_Salidas', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idSalidas, Fecha_Salidas, Hora_Salidas, Imagen_Salidas, Empleados_idEmpleados_Salidas', 'safe', 'on'=>'search'),
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
			'empleadosIdEmpleadosSalidas' => array(self::BELONGS_TO, 'Empleados', 'Empleados_idEmpleados_Salidas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSalidas' => 'Id Salidas',
			'Fecha_Salidas' => 'Fecha Salidas',
			'Hora_Salidas' => 'Hora Salidas',
			'Imagen_Salidas' => 'Imagen Salidas',
			'Empleados_idEmpleados_Salidas' => 'Empleados Id Empleados Salidas',
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
		$criteria->compare('Fecha_Salidas',$this->Fecha_Salidas,true);
		$criteria->compare('Hora_Salidas',$this->Hora_Salidas,true);
		$criteria->compare('Imagen_Salidas',$this->Imagen_Salidas,true);
		$criteria->compare('Empleados_idEmpleados_Salidas',$this->Empleados_idEmpleados_Salidas);

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
