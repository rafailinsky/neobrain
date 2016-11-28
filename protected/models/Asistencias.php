<?php

/**
 * This is the model class for table "Asistencias".
 *
 * The followings are the available columns in table 'Asistencias':
 * @property integer $idAsistencias
 * @property string $Fecha_Asistencias
 * @property string $Hora_Entrada_Asistencias
 * @property string $Hora_Salida_Asistencias
 * @property integer $Empleados_idEmpleados_Asistencias
 *
 * The followings are the available model relations:
 * @property Empleados $empleadosIdEmpleadosAsistencias
 */
class Asistencias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Asistencias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Empleados_idEmpleados_Asistencias', 'required'),
			array('Empleados_idEmpleados_Asistencias', 'numerical', 'integerOnly'=>true),
			array('Fecha_Asistencias, Hora_Entrada_Asistencias, Hora_Salida_Asistencias', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAsistencias, Fecha_Asistencias, Hora_Entrada_Asistencias, Hora_Salida_Asistencias, Empleados_idEmpleados_Asistencias', 'safe', 'on'=>'search'),
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
			'empleadosIdEmpleadosAsistencias' => array(self::BELONGS_TO, 'Empleados', 'Empleados_idEmpleados_Asistencias'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAsistencias' => 'Id Asistencias',
			'Fecha_Asistencias' => 'Fecha Asistencias',
			'Hora_Entrada_Asistencias' => 'Hora Entrada Asistencias',
			'Hora_Salida_Asistencias' => 'Hora Salida Asistencias',
			'Empleados_idEmpleados_Asistencias' => 'Empleados Id Empleados Asistencias',
		);
	}

	public function horasbehaviors(){
	return array(
		'CTimestampBehavior' => array(
			'class' => 'zii.behaviors.CTimestampBehavior',
			'createAttribute' => 'create_time_attribute',
			'updateAttribute' => 'update_time_attribute',
		)
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

		$criteria->compare('idAsistencias',$this->idAsistencias);
		$criteria->compare('Fecha_Asistencias',$this->Fecha_Asistencias,true);
		$criteria->compare('Hora_Entrada_Asistencias',$this->Hora_Entrada_Asistencias,true);
		$criteria->compare('Hora_Salida_Asistencias',$this->Hora_Salida_Asistencias,true);
		$criteria->compare('Empleados_idEmpleados_Asistencias',$this->Empleados_idEmpleados_Asistencias);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Asistencias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
