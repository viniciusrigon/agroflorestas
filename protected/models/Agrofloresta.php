<?php

/**
 * This is the model class for table "agroflorestas".
 *
 * The followings are the available columns in table 'agroflorestas':
 * @property integer $saf_id
 * @property string $uf
 * @property string $municipio
 * @property string $cep
 * @property string $telefone
 * @property string $email
 * @property string $webpage
 * @property double $lat
 * @property double $lng
 *
 * The followings are the available model relations:
 * @property Beneficiamento[] $beneficiamentos
 * @property Comercializacao[] $comercializacaos
 * @property EspeciesAnimaisManejadas[] $especiesAnimaisManejadases
 * @property EspeciesVegetaisManejadas[] $especiesVegetaisManejadases
 * @property Familia[] $familias
 * @property Perpectivas[] $perpectivases
 * @property PraticasManejo[] $praticasManejos
 * @property Propriedade[] $propriedades
 * @property RedeSociotecnica[] $redeSociotecnicas
 */
class Agrofloresta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Agrofloresta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'agroflorestas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lat, lng', 'numerical'),
			array('uf', 'length', 'max'=>2),
			array('municipio, webpage', 'length', 'max'=>60),
			array('cep', 'length', 'max'=>10),
			array('telefone', 'length', 'max'=>20),
			array('email', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('saf_id, uf, municipio, cep, telefone, email, webpage, lat, lng', 'safe', 'on'=>'search'),
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
			'beneficiamentos' => array(self::HAS_MANY, 'Beneficiamento', 'saf_id'),
			'comercializacaos' => array(self::HAS_MANY, 'Comercializacao', 'saf_id'),
			'especiesAnimaisManejadases' => array(self::HAS_MANY, 'EspeciesAnimaisManejadas', 'saf_id'),
			'especiesVegetaisManejadases' => array(self::HAS_MANY, 'EspeciesVegetaisManejadas', 'saf_id'),
			'familias' => array(self::HAS_MANY, 'Familia', 'saf_id'),
			'perpectivases' => array(self::HAS_MANY, 'Perpectivas', 'saf_id'),
			'praticasManejos' => array(self::HAS_MANY, 'PraticasManejo', 'saf_id'),
			'propriedades' => array(self::HAS_MANY, 'Propriedade', 'saf_id'),
			'redeSociotecnicas' => array(self::HAS_MANY, 'RedeSociotecnica', 'saf_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'saf_id' => 'Saf',
			'uf' => 'Uf',
			'municipio' => 'Municipio',
			'cep' => 'Cep',
			'telefone' => 'Telefone',
			'email' => 'Email',
			'webpage' => 'Webpage',
			'lat' => 'Lat',
			'lng' => 'Lng',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('saf_id',$this->saf_id);
		$criteria->compare('uf',$this->uf,true);
		$criteria->compare('municipio',$this->municipio,true);
		$criteria->compare('cep',$this->cep,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('webpage',$this->webpage,true);
		$criteria->compare('lat',$this->lat);
		$criteria->compare('lng',$this->lng);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}