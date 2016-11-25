<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $idUsuarios
 * @property string $Nombre_Usuarios
 * @property string $Correo_Usuarios
 * @property string $username_Usuarios
 * @property string $password_Usuarios
 * @property string $session_Usuarios
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username_Usuarios, password_Usuarios, session_Usuarios', 'required'),
			array('Nombre_Usuarios', 'length', 'max'=>45),
			array('Correo_Usuarios', 'length', 'max'=>25),
			array('username_Usuarios, password_Usuarios', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUsuarios, Nombre_Usuarios, Correo_Usuarios, username_Usuarios, password_Usuarios, session_Usuarios', 'safe', 'on'=>'search'),
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
			'idUsuarios' => 'Id Usuarios',
			'Nombre_Usuarios' => 'Nombre Usuarios',
			'Correo_Usuarios' => 'Correo Usuarios',
			'username_Usuarios' => 'Username Usuarios',
			'password_Usuarios' => 'Password Usuarios',
			'session_Usuarios' => 'Session Usuarios',
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

		$criteria->compare('idUsuarios',$this->idUsuarios);
		$criteria->compare('Nombre_Usuarios',$this->Nombre_Usuarios,true);
		$criteria->compare('Correo_Usuarios',$this->Correo_Usuarios,true);
		$criteria->compare('username_Usuarios',$this->username_Usuarios,true);
		$criteria->compare('password_Usuarios',$this->password_Usuarios,true);
		$criteria->compare('session_Usuarios',$this->session_Usuarios,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
