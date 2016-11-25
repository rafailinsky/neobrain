<?php

/**
 * This is the model class for table "inventario".
 *
 * The followings are the available columns in table 'inventario':
 * @property integer $idInventario
 * @property string $Hora_Inventario
 * @property integer $productos_idProductos_Inventario
 *
 * The followings are the available model relations:
 * @property Productos $productosIdProductosInventario
 */
class Inventario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inventario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('productos_idProductos_Inventario', 'required'),
			array('productos_idProductos_Inventario', 'numerical', 'integerOnly'=>true),
			array('Hora_Inventario', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idInventario, Hora_Inventario, productos_idProductos_Inventario', 'safe', 'on'=>'search'),
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
			'productosIdProductosInventario' => array(self::BELONGS_TO, 'Productos', 'productos_idProductos_Inventario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idInventario' => 'Id Inventario',
			'Hora_Inventario' => 'Hora Inventario',
			'productos_idProductos_Inventario' => 'Productos Id Productos Inventario',
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

		$criteria->compare('idInventario',$this->idInventario);
		$criteria->compare('Hora_Inventario',$this->Hora_Inventario,true);
		$criteria->compare('productos_idProductos_Inventario',$this->productos_idProductos_Inventario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inventario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
