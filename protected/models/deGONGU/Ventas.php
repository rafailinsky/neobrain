<?php

/**
 * This is the model class for table "ventas".
 *
 * The followings are the available columns in table 'ventas':
 * @property integer $idVentas
 * @property string $Fechas_Ventas
 * @property integer $productos_idProductos
 * @property integer $clientes_idClientes
 *
 * The followings are the available model relations:
 * @property Clientes $clientesIdClientes
 * @property Productos $productosIdProductos
 */
class Ventas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ventas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('productos_idProductos, clientes_idClientes', 'required'),
			array('productos_idProductos, clientes_idClientes', 'numerical', 'integerOnly'=>true),
			array('Fechas_Ventas', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idVentas, Fechas_Ventas, productos_idProductos, clientes_idClientes', 'safe', 'on'=>'search'),
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
			'clientesIdClientes' => array(self::BELONGS_TO, 'Clientes', 'clientes_idClientes'),
			'productosIdProductos' => array(self::BELONGS_TO, 'Productos', 'productos_idProductos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idVentas' => 'Id Ventas',
			'Fechas_Ventas' => 'Fechas Ventas',
			'productos_idProductos' => 'Productos Id Productos',
			'clientes_idClientes' => 'Clientes Id Clientes',
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

		$criteria->compare('idVentas',$this->idVentas);
		$criteria->compare('Fechas_Ventas',$this->Fechas_Ventas,true);
		$criteria->compare('productos_idProductos',$this->productos_idProductos);
		$criteria->compare('clientes_idClientes',$this->clientes_idClientes);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ventas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
