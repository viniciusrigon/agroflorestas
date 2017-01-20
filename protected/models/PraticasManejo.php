<?php

/**
 * This is the model class for table "praticas_manejo".
 *
 * The followings are the available columns in table 'praticas_manejo':
 * @property integer $manejo_id
 * @property integer $saf_id
 * @property integer $propriedade_id
 * @property integer $area_manejada
 * @property string $APP
 * @property string $reserva_legal
 * @property string $historico
 * @property string $antes_saf
 * @property string $adubacao
 * @property integer $num_pessoas_manejo
 * @property string $terceirizado
 * @property string $mutirao
 * @property string $dados_brutos
 *
 * The followings are the available model relations:
 * @property EspeciesAnimaisManejadas[] $especiesAnimaisManejadases
 * @property EspeciesVegetaisManejadas[] $especiesVegetaisManejadases
 * @property IntegracaoManejo[] $integracaoManejos
 * @property Agroflorestas $saf
 * @property Propriedade $propriedade
 */
class PraticasManejo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PraticasManejo the static model class
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
		return 'praticas_manejo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('saf_id, propriedade_id, area_manejada, APP, reserva_legal, historico, dados_brutos', 'required'),
			array('saf_id, propriedade_id, area_manejada, num_pessoas_manejo', 'numerical', 'integerOnly'=>true),
			array('APP, reserva_legal, terceirizado, mutirao', 'length', 'max'=>1),
			array('antes_saf', 'length', 'max'=>20),
			array('adubacao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('manejo_id, saf_id, propriedade_id, area_manejada, APP, reserva_legal, historico, antes_saf, adubacao, num_pessoas_manejo, terceirizado, mutirao, dados_brutos', 'safe', 'on'=>'search'),
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
			'especiesAnimaisManejadases' => array(self::HAS_MANY, 'EspeciesAnimaisManejadas', 'manejo_id'),
			'especiesVegetaisManejadases' => array(self::HAS_MANY, 'EspeciesVegetaisManejadas', 'manejo_id'),
			'integracaoManejos' => array(self::HAS_MANY, 'IntegracaoManejo', 'manejo_id'),
			'saf' => array(self::BELONGS_TO, 'Agroflorestas', 'saf_id'),
			'propriedade' => array(self::BELONGS_TO, 'Propriedade', 'propriedade_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'manejo_id' => 'Manejo',
			'saf_id' => 'Saf',
			'propriedade_id' => 'Propriedade',
			'area_manejada' => 'Área manejada em hectare',
			'APP' => 'App',
			'reserva_legal' => 'Reserva Legal',
			'historico' => 'Histórico',
			'antes_saf' => 'Caracterização da área no momento da implantação do SAF (o que tinha antes do SAF)   (capoeira/capoeirão/mato nativo/área cultivada/campo nativo/pomar/outros)',
			'adubacao' => 'Adubação',
			'num_pessoas_manejo' => 'Número de pessoas',
			'terceirizado' => 'Serviços de terceiros',
			'mutirao' => 'Mutirão',
			'dados_brutos' => 'Dados Brutos',
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

		$criteria->compare('manejo_id',$this->manejo_id);
		$criteria->compare('saf_id',$this->saf_id);
		$criteria->compare('propriedade_id',$this->propriedade_id);
		$criteria->compare('area_manejada',$this->area_manejada);
		$criteria->compare('APP',$this->APP,true);
		$criteria->compare('reserva_legal',$this->reserva_legal,true);
		$criteria->compare('historico',$this->historico,true);
		$criteria->compare('antes_saf',$this->antes_saf,true);
		$criteria->compare('adubacao',$this->adubacao,true);
		$criteria->compare('num_pessoas_manejo',$this->num_pessoas_manejo);
		$criteria->compare('terceirizado',$this->terceirizado,true);
		$criteria->compare('mutirao',$this->mutirao,true);
		$criteria->compare('dados_brutos',$this->dados_brutos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
