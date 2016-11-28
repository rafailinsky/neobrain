<?php

/**
 * This is the model class for table "Empleados".
 *
 * The followings are the available columns in table 'Empleados':
 * @property integer $idEmpleados
 * @property string $RFCtxt_Empleados
 * @property string $IMSStxt_Empleados
 * @property string $CURPtxt_Empleados
 * @property string $NUM_INFONAVIT_Empleados
 * @property string $Nombres_Empleados
 * @property string $Apellido_Paterno_Empleados
 * @property string $Apellido_Materno_Empleados
 * @property string $Genero_Empleados
 * @property string $Status_Empleados
 * @property string $Status_IMSS_Empleados
 * @property string $Fotografia_Empleados
 * @property string $CURPimg_Empleados
 * @property string $INEimg_Empleados
 * @property string $ActaNacimineto_Empleados
 * @property string $ComprovanteDomicilio_Empleados
 * @property string $IMSSimg_Empleados
 * @property string $INFONAVITimg_Empleados
 * @property string $Calle_Domicilio_Empleados
 * @property string $Num_Domicilio_Empleados
 * @property string $Colonia_Domicilio_Empleados
 * @property string $Cod_Postal_Domicilio_Empleados
 * @property string $Ciudad_Domicilio_Empleados
 * @property string $Estado_Domicilio_Empleados
 * @property integer $Puestos_idPuestos_Empleados
 * @property integer $Obras_idObras_Empleados
 * @property string $Telefono_Empleados
 * @property string $Celular_Empleados
 * @property string $Codigo_Empleados
 * @property string $Correo_Empleados
 *
 * The followings are the available model relations:
 * @property Asistencias[] $asistenciases
 * @property Contratos[] $contratoses
 * @property Obras $obrasIdObrasEmpleados
 * @property Puestos $puestosIdPuestosEmpleados
 * @property Traspasos[] $traspasoses
 * @property Traspasos[] $traspasoses1
 * @property Traspasos[] $traspasoses2
 */
class Empleados extends CActiveRecord
{

	public static $generoempleados=array(''=>'Selecciona Genero','0'=>'Masculino','1'=>'Femenino');

	public static $statusempleados=array(''=>'Selecciona Status','0'=>'Inactivo','1'=>'Activo');

	public static $statusimssempleados=array(''=>'Selecciona Opcion','0'=>'NO Registrado','1'=>'SI Registrado');

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Empleados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CURPimg_Empleados,INEimg_Empleados, ActaNacimineto_Empleados, ComprovanteDomicilio_Empleados, IMSSimg_Empleados, INFONAVITimg_Empleados,INFONAVITimg_Empleados,Calle_Domicilio_Empleados, Num_Domicilio_Empleados, Colonia_Domicilio_Empleados, Cod_Postal_Domicilio_Empleados, Ciudad_Domicilio_Empleados, Estado_Domicilio_Empleados,Correo_Empleados,Telefono_Empleados,CURPtxt_Empleados,RFCtxt_Empleados,IMSStxt_Empleados, Nombres_Empleados, Apellido_Paterno_Empleados, Apellido_Materno_Empleados, Puestos_idPuestos_Empleados', 'required'),
			array('Puestos_idPuestos_Empleados, Obras_idObras_Empleados', 'numerical', 'integerOnly'=>true),
			array('RFCtxt_Empleados, IMSStxt_Empleados, CURPtxt_Empleados, NUM_INFONAVIT_Empleados, Apellido_Paterno_Empleados, Apellido_Materno_Empleados, Ciudad_Domicilio_Empleados, Estado_Domicilio_Empleados, Telefono_Empleados, Celular_Empleados', 'length', 'max'=>15),
			array('Nombres_Empleados, Codigo_Empleados', 'length', 'max'=>25),
			array('Genero_Empleados, Status_Empleados, Status_IMSS_Empleados, INFONAVITimg_Empleados, Calle_Domicilio_Empleados, Colonia_Domicilio_Empleados, Correo_Empleados', 'length', 'max'=>45),
			array('Num_Domicilio_Empleados', 'length', 'max'=>9),
			array('Cod_Postal_Domicilio_Empleados', 'length', 'max'=>7),
			array('Fotografia_Empleados, CURPimg_Empleados, INEimg_Empleados, ActaNacimineto_Empleados, ComprovanteDomicilio_Empleados, IMSSimg_Empleados', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEmpleados, RFCtxt_Empleados, IMSStxt_Empleados, CURPtxt_Empleados, NUM_INFONAVIT_Empleados, Nombres_Empleados, Apellido_Paterno_Empleados, Apellido_Materno_Empleados, Genero_Empleados, Status_Empleados, Status_IMSS_Empleados, Fotografia_Empleados, CURPimg_Empleados, INEimg_Empleados, ActaNacimineto_Empleados, ComprovanteDomicilio_Empleados, IMSSimg_Empleados, INFONAVITimg_Empleados, Calle_Domicilio_Empleados, Num_Domicilio_Empleados, Colonia_Domicilio_Empleados, Cod_Postal_Domicilio_Empleados, Ciudad_Domicilio_Empleados, Estado_Domicilio_Empleados, Puestos_idPuestos_Empleados, Obras_idObras_Empleados, Telefono_Empleados, Celular_Empleados, Codigo_Empleados, Correo_Empleados', 'safe', 'on'=>'search'),
			array('Correo_Empleados', 'email'),
			array('Cod_Postal_Domicilio_Empleados,Telefono_Empleados, Celular_Empleados', 'numerical'),
			array('Cod_Postal_Domicilio_Empleados', 'length', 'is'=>5),
			array('ComprovanteDomicilio_Empleados, IMSSimg_Empleados, INFONAVITimg_Empleados,CURPimg_Empleados, INEimg_Empleados', 'file', 
 'types'=>'pdf, doc, docx, jpg, jpeg, png, gif',
 'maxSize'=>1024*1024*3,
 'tooLarge'=>'El archivo no puede exceder los 3MB.',
 'allowEmpty'=>false),

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
			'asistenciases' => array(self::HAS_MANY, 'Asistencias', 'Empleados_idEmpleados_Asistencias'),
			'contratoses' => array(self::HAS_MANY, 'Contratos', 'Empleados_idEmpleados'),
			'obrasIdObrasEmpleados' => array(self::BELONGS_TO, 'Obras', 'Obras_idObras_Empleados'),
			'puestosIdPuestosEmpleados' => array(self::BELONGS_TO, 'Puestos', 'Puestos_idPuestos_Empleados'),
			'traspasoses' => array(self::HAS_MANY, 'Traspasos', 'Empleados_idEmpleados_Origen'),
			'traspasoses1' => array(self::HAS_MANY, 'Traspasos', 'Empleados_idEmpleados_Destino'),
			'traspasoses2' => array(self::HAS_MANY, 'Traspasos', 'Empleados_idEmpleados_Transporta'),
		);
	}

	public static function getGeneroEmpleados($keyst=null)
	{
		if($keyst!==null)
			return self::$generoempleados[$keyst];
		return self::$generoempleados;
	}

	public static function getStatusEmpleados($keyst=null)
	{
		if($keyst!==null)
			return self::$statusempleados[$keyst];
		return self::$statusempleados;
	}

	public static function getStatusIMSSEmpleados($keyst=null)
	{
		if($keyst!==null)
			return self::$statusimssempleados[$keyst];
		return self::$statusimssempleados;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEmpleados' => 'ID',
			'RFCtxt_Empleados' => 'RFC',
			'IMSStxt_Empleados' => 'NUM IMSS',
			'CURPtxt_Empleados' => 'CURP',
			'NUM_INFONAVIT_Empleados' => 'NUM INFONAVIT',
			'Nombres_Empleados' => 'Nombre(s)',
			'Apellido_Paterno_Empleados' => 'Apellido Paterno ',
			'Apellido_Materno_Empleados' => 'Apellido Materno ',
			'Genero_Empleados' => 'Genero ',
			'Status_Empleados' => 'Status Empleado',
			'Status_IMSS_Empleados' => 'Status IMSS',
			'Fotografia_Empleados' => 'Fotografia',
			'CURPimg_Empleados' => 'CURP',
			'INEimg_Empleados' => 'INE',
			'ActaNacimineto_Empleados' => 'Acta Nacimineto',
			'ComprovanteDomicilio_Empleados' => 'Com Dom ',
			'IMSSimg_Empleados' => 'IMSS',
			'INFONAVITimg_Empleados' => 'INFONAVIT',
			'Calle_Domicilio_Empleados' => 'Calle ',
			'Num_Domicilio_Empleados' => 'Num ',
			'Colonia_Domicilio_Empleados' => 'Colonia ',
			'Cod_Postal_Domicilio_Empleados' => 'Cod Postal ',
			'Ciudad_Domicilio_Empleados' => 'Ciudad ',
			'Estado_Domicilio_Empleados' => 'Estado ',
			'Puestos_idPuestos_Empleados' => 'Puesto',
			'Obras_idObras_Empleados' => 'Obra',
			'Telefono_Empleados' => 'Telefono ',
			'Celular_Empleados' => 'Celular',
			'Codigo_Empleados' => 'Codigo',
			'Correo_Empleados' => 'Correo',
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

		$criteria->compare('idEmpleados',$this->idEmpleados);
		$criteria->compare('RFCtxt_Empleados',$this->RFCtxt_Empleados,true);
		$criteria->compare('IMSStxt_Empleados',$this->IMSStxt_Empleados,true);
		$criteria->compare('CURPtxt_Empleados',$this->CURPtxt_Empleados,true);
		$criteria->compare('NUM_INFONAVIT_Empleados',$this->NUM_INFONAVIT_Empleados,true);
		$criteria->compare('Nombres_Empleados',$this->Nombres_Empleados,true);
		$criteria->compare('Apellido_Paterno_Empleados',$this->Apellido_Paterno_Empleados,true);
		$criteria->compare('Apellido_Materno_Empleados',$this->Apellido_Materno_Empleados,true);
		$criteria->compare('Genero_Empleados',$this->Genero_Empleados,true);
		$criteria->compare('Status_Empleados',$this->Status_Empleados,true);
		$criteria->compare('Status_IMSS_Empleados',$this->Status_IMSS_Empleados,true);
		$criteria->compare('Fotografia_Empleados',$this->Fotografia_Empleados,true);
		$criteria->compare('CURPimg_Empleados',$this->CURPimg_Empleados,true);
		$criteria->compare('INEimg_Empleados',$this->INEimg_Empleados,true);
		$criteria->compare('ActaNacimineto_Empleados',$this->ActaNacimineto_Empleados,true);
		$criteria->compare('ComprovanteDomicilio_Empleados',$this->ComprovanteDomicilio_Empleados,true);
		$criteria->compare('IMSSimg_Empleados',$this->IMSSimg_Empleados,true);
		$criteria->compare('INFONAVITimg_Empleados',$this->INFONAVITimg_Empleados,true);
		$criteria->compare('Calle_Domicilio_Empleados',$this->Calle_Domicilio_Empleados,true);
		$criteria->compare('Num_Domicilio_Empleados',$this->Num_Domicilio_Empleados,true);
		$criteria->compare('Colonia_Domicilio_Empleados',$this->Colonia_Domicilio_Empleados,true);
		$criteria->compare('Cod_Postal_Domicilio_Empleados',$this->Cod_Postal_Domicilio_Empleados,true);
		$criteria->compare('Ciudad_Domicilio_Empleados',$this->Ciudad_Domicilio_Empleados,true);
		$criteria->compare('Estado_Domicilio_Empleados',$this->Estado_Domicilio_Empleados,true);
		$criteria->compare('Puestos_idPuestos_Empleados',$this->Puestos_idPuestos_Empleados);
		$criteria->compare('Obras_idObras_Empleados',$this->Obras_idObras_Empleados);
		$criteria->compare('Telefono_Empleados',$this->Telefono_Empleados,true);
		$criteria->compare('Celular_Empleados',$this->Celular_Empleados,true);
		$criteria->compare('Codigo_Empleados',$this->Codigo_Empleados,true);
		$criteria->compare('Correo_Empleados',$this->Correo_Empleados,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empleados the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
