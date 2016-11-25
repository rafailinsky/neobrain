<?php

/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property integer $idProductos
 * @property integer $Clave_Productos
 * @property string $Nombre_Productos
 * @property string $Descripcion_Productos
 * @property double $Precio_Costo_Productos
 * @property double $Precio_Venta_Productos
 * @property double $Precio_Mayoreo_Productos
 * @property integer $Stock_Productos
 * @property integer $Proveedor_idProveedor_Productos
 *
 * The followings are the available model relations:
 * @property Contratos[] $contratoses
 * @property Entradas[] $entradases
 * @property Inventario[] $inventarios
 * @property Proveedor $proveedorIdProveedorProductos
 * @property Ventas[] $ventases
 */
class Productos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Proveedor_idProveedor_Productos', 'required'),
			array('Clave_Productos, Stock_Productos, Proveedor_idProveedor_Productos', 'numerical', 'integerOnly'=>true),
			array('Precio_Costo_Productos, Precio_Venta_Productos, Precio_Mayoreo_Productos', 'numerical'),
			array('Nombre_Productos', 'length', 'max'=>25),
			array('Descripcion_Productos', 'length', 'max'=>145),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProductos, Clave_Productos, Nombre_Productos, Descripcion_Productos, Precio_Costo_Productos, Precio_Venta_Productos, Precio_Mayoreo_Productos, Stock_Productos, Proveedor_idProveedor_Productos', 'safe', 'on'=>'search'),
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
			'contratoses' => array(self::MANY_MANY, 'Contratos', 'contratosxproductos(productos_idProductos_contratosxproductos, contratos_idContratos_contratosxproductos)'),
			'entradases' => array(self::MANY_MANY, 'Entradas', 'entradasxproductos(productos_idProductos_entradasxproductos, entradas_idEntradas_entradasxproductos)'),
			'inventarios' => array(self::HAS_MANY, 'Inventario', 'productos_idProductos_Inventario'),
			'proveedorIdProveedorProductos' => array(self::BELONGS_TO, 'Proveedor', 'Proveedor_idProveedor_Productos'),
			'ventases' => array(self::HAS_MANY, 'Ventas', 'productos_idProductos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProductos' => 'Id Productos',
			'Clave_Productos' => 'Clave Productos',
			'Nombre_Productos' => 'Nombre Productos',
			'Descripcion_Productos' => 'Descripcion Productos',
			'Precio_Costo_Productos' => 'Precio Costo Productos',
			'Precio_Venta_Productos' => 'Precio Venta Productos',
			'Precio_Mayoreo_Productos' => 'Precio Mayoreo Productos',
			'Stock_Productos' => 'Stock Productos',
			'Proveedor_idProveedor_Productos' => 'Proveedor Id Proveedor Productos',
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

		$criteria->compare('idProductos',$this->idProductos);
		$criteria->compare('Clave_Productos',$this->Clave_Productos);
		$criteria->compare('Nombre_Productos',$this->Nombre_Productos,true);
		$criteria->compare('Descripcion_Productos',$this->Descripcion_Productos,true);
		$criteria->compare('Precio_Costo_Productos',$this->Precio_Costo_Productos);
		$criteria->compare('Precio_Venta_Productos',$this->Precio_Venta_Productos);
		$criteria->compare('Precio_Mayoreo_Productos',$this->Precio_Mayoreo_Productos);
		$criteria->compare('Stock_Productos',$this->Stock_Productos);
		$criteria->compare('Proveedor_idProveedor_Productos',$this->Proveedor_idProveedor_Productos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Productos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
