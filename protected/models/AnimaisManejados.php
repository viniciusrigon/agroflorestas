<?php

/**
 * This is the model class for table "especies_animais_manejadas".
 *
 * The followings are the available columns in table 'especies_animais_manejadas':
 * @property integer $esp_ani_manejadas_id
 * @property integer $manejo_id
 * @property string $nome_comum
 * @property string $nome_cientifico
 * @property string $familia
 * @property string $funcao_ecologica_no_saf
 * @property string $origem
 * @property string $estrato
 * @property string $utilidade
 * @property string $densidade
 * @property string $porte
 * @property string $informacoes_adicionais
 *
 * The followings are the available model relations:
 * @property PraticasManejo $manejo
 */
class AnimaisManejados extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AnimaisManejados the static model class
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
		return 'especies_animais_manejadas';
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
			array('nome_comum, nome_cientifico, familia, funcao_ecologica_no_saf, origem, estrato, utilidade, densidade, porte', 'length', 'max'=>50),
			array('informacoes_adicionais', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('esp_ani_manejadas_id, manejo_id, nome_comum, nome_cientifico, familia, funcao_ecologica_no_saf, origem, estrato, utilidade, densidade, porte, informacoes_adicionais', 'safe', 'on'=>'search'),
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
			'manejo' => array(self::BELONGS_TO, 'PraticasManejo', 'manejo_id'),			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'esp_ani_manejadas_id' => 'Esp Ani Manejadas',			
			'manejo_id' => 'Manejo',
			'nome_comum' => 'Nome Comum',
			'nome_cientifico' => 'Nome Cientifico',
			'familia' => 'Familia',
			'funcao_ecologica_no_saf' => 'Funcao Ecologica No Saf',
			'origem' => 'Origem',
			'estrato' => 'Estrato',
			'utilidade' => 'Utilidade',
			'densidade' => 'Densidade',
			'porte' => 'Porte',
			'informacoes_adicionais' => 'Informacoes Adicionais',
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

		$criteria->compare('esp_ani_manejadas_id',$this->esp_ani_manejadas_id);		
		$criteria->compare('manejo_id',$this->manejo_id);
		$criteria->compare('nome_comum',$this->nome_comum,true);
		$criteria->compare('nome_cientifico',$this->nome_cientifico,true);
		$criteria->compare('familia',$this->familia,true);
		$criteria->compare('funcao_ecologica_no_saf',$this->funcao_ecologica_no_saf,true);
		$criteria->compare('origem',$this->origem,true);
		$criteria->compare('estrato',$this->estrato,true);
		$criteria->compare('utilidade',$this->utilidade,true);
		$criteria->compare('densidade',$this->densidade,true);
		$criteria->compare('porte',$this->porte,true);
		$criteria->compare('informacoes_adicionais',$this->informacoes_adicionais,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
