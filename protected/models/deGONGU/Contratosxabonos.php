<?php

/**
 * This is the model class for table "contratosxabonos".
 *
 * The followings are the available columns in table 'contratosxabonos':
 * @property integer $contratos_idContratos_contratosxabonos
 * @property integer $abonos_idAbonos_contratosxabonos
 */
class Contratosxabonos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contratosxabonos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contratos_idContratos_contratosxabonos, abonos_idAbonos_contratosxabonos', 'required'),
			array('contratos_idContratos_contratosxabonos, abonos_idAbonos_contratosxabonos', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('contratos_idContratos_contratosxabonos, abonos_idAbonos_contratosxabonos', 'safe', 'on'=>'search'),
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
			'contratos_idContratos_contratosxabonos' => 'Contratos Id Contratos Contratosxabonos',
			'abonos_idAbonos_contratosxabonos' => 'Abonos Id Abonos Contratosxabonos',
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

		$criteria->compare('contratos_idContratos_contratosxabonos',$this->contratos_idContratos_contratosxabonos);
		$criteria->compare('abonos_idAbonos_contratosxabonos',$this->abonos_idAbonos_contratosxabonos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contratosxabonos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
