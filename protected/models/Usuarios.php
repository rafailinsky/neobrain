<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $idUsuarios
 * @property string $Nombre_Usuarios
 * @property string $Identificacion_Usuarios
 * @property string $Email_Usuarios
 * @property integer $Status_Usuarios
 * @property string $Genero_Usuarios
 * @property string $username
 * @property string $password
 * @property string $session
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
			array('username, password,session', 'required'),
			array('Status_Usuarios', 'numerical', 'integerOnly'=>true),
			array('Nombre_Usuarios, Identificacion_Usuarios, Email_Usuarios, Genero_Usuarios', 'length', 'max'=>45),
			array('username, password', 'length', 'max'=>445),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUsuarios, Nombre_Usuarios, Identificacion_Usuarios, Email_Usuarios, Status_Usuarios, Genero_Usuarios, username, password, session', 'safe', 'on'=>'search'),
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
			'idUsuarios' => 'ID',
			'Nombre_Usuarios' => 'Nombre',
			'Identificacion_Usuarios' => 'Identificador',
			'Email_Usuarios' => 'Email',
			'Status_Usuarios' => 'Status',
			'Genero_Usuarios' => 'Genero',
			'username' => 'Username',
			'password' => 'Password',
			'session' => 'Session',
		);
	}

	public function validatePassword($password)
	{
		return $this->hashPassword($password,$this->session)===$this->password;
	}

	public function hashPassword($password,$salt)
	{
		return md5($salt.$password);
	}

	public function generateSalt()
	{
		return uniqid('',true);
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
		$criteria->compare('Identificacion_Usuarios',$this->Identificacion_Usuarios,true);
		$criteria->compare('Email_Usuarios',$this->Email_Usuarios,true);
		$criteria->compare('Status_Usuarios',$this->Status_Usuarios);
		$criteria->compare('Genero_Usuarios',$this->Genero_Usuarios,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('session',$this->session,true);

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
