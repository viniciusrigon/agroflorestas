<?php

/**
 * This is the model class for table "especies_vegetais_manejadas".
 *
 * The followings are the available columns in table 'especies_vegetais_manejadas':
 * @property integer $esp_veg_manejadas_id
 * @property integer $manejo_id
 * @property string $nome_comum
 * @property string $nome_cientifico
 * @property string $familia_botanica
 * @property string $funcao_ecologica_no_saf
 * @property string $origem_plantio
 * @property string $estrato
 * @property string $utilidade
 * @property string $espacamento
 * @property string $habito
 * @property string $informacoes_adicionais
 * @property string $meio_implantacao
 *
 * The followings are the available model relations:
 * @property Colheita[] $colheitas
 * @property PraticasManejo $manejo
 */
class VegetaisManejados extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VegetaisManejados the static model class
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
		return 'especies_vegetais_manejadas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('manejo_id', 'required'),
			array('manejo_id', 'numerical', 'integerOnly'=>true),
			array('nome_comum, nome_cientifico, familia_botanica, funcao_ecologica_no_saf, origem_plantio, estrato, utilidade, espacamento, habito, meio_implantacao', 'length', 'max'=>50),
			array('informacoes_adicionais', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('esp_veg_manejadas_id, manejo_id, nome_comum, nome_cientifico, familia_botanica, funcao_ecologica_no_saf, origem_plantio, estrato, utilidade, espacamento, habito, informacoes_adicionais, meio_implantacao', 'safe', 'on'=>'search'),
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
			'colheitas' => array(self::HAS_MANY, 'Colheita', 'vegetais_id'),
			'manejo' => array(self::BELONGS_TO, 'PraticasManejo', 'manejo_id'),			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'esp_veg_manejadas_id' => 'Esp Veg Manejadas',			
			'manejo_id' => 'Manejo',
			'nome_comum' => 'Nome Comum',
			'nome_cientifico' => 'Nome Cientifico',
			'familia_botanica' => 'Familia Botanica',
			'funcao_ecologica_no_saf' => 'Funcao Ecologica No Saf',
			'origem_plantio' => 'Origem Plantio',
			'estrato' => 'Estrato',
			'utilidade' => 'Utilidade',
			'espacamento' => 'Espacamento',
			'habito' => 'Habito',
			'informacoes_adicionais' => 'Informacoes Adicionais',
			'meio_implantacao' => 'Meio Implantacao',
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

		$criteria->compare('esp_veg_manejadas_id',$this->esp_veg_manejadas_id);		
		$criteria->compare('manejo_id',$this->manejo_id);
		$criteria->compare('nome_comum',$this->nome_comum,true);
		$criteria->compare('nome_cientifico',$this->nome_cientifico,true);
		$criteria->compare('familia_botanica',$this->familia_botanica,true);
		$criteria->compare('funcao_ecologica_no_saf',$this->funcao_ecologica_no_saf,true);
		$criteria->compare('origem_plantio',$this->origem_plantio,true);
		$criteria->compare('estrato',$this->estrato,true);
		$criteria->compare('utilidade',$this->utilidade,true);
		$criteria->compare('espacamento',$this->espacamento,true);
		$criteria->compare('habito',$this->habito,true);
		$criteria->compare('informacoes_adicionais',$this->informacoes_adicionais,true);
		$criteria->compare('meio_implantacao',$this->meio_implantacao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
