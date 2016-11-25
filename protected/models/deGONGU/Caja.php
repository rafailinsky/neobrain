<?php

/**
 * This is the model class for table "caja".
 *
 * The followings are the available columns in table 'caja':
 * @property integer $idCaja
 * @property integer $Movimiento_Caja
 * @property string $Tipo_Caja
 * @property double $Monto_Caja
 * @property string $Fecha_Caja
 * @property string $Hora_Caja
 */
class Caja extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'caja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Movimiento_Caja', 'numerical', 'integerOnly'=>true),
			array('Monto_Caja', 'numerical'),
			array('Tipo_Caja', 'length', 'max'=>15),
			array('Fecha_Caja, Hora_Caja', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCaja, Movimiento_Caja, Tipo_Caja, Monto_Caja, Fecha_Caja, Hora_Caja', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCaja' => 'Id Caja',
			'Movimiento_Caja' => 'Movimiento Caja',
			'Tipo_Caja' => 'Tipo Caja',
			'Monto_Caja' => 'Monto Caja',
			'Fecha_Caja' => 'Fecha Caja',
			'Hora_Caja' => 'Hora Caja',
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

		$criteria->compare('idCaja',$this->idCaja);
		$criteria->compare('Movimiento_Caja',$this->Movimiento_Caja);
		$criteria->compare('Tipo_Caja',$this->Tipo_Caja,true);
		$criteria->compare('Monto_Caja',$this->Monto_Caja);
		$criteria->compare('Fecha_Caja',$this->Fecha_Caja,true);
		$criteria->compare('Hora_Caja',$this->Hora_Caja,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Caja the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
