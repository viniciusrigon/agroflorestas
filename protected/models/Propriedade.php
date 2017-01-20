<?php

/**
 * This is the model class for table "propriedade".
 *
 * The followings are the available columns in table 'propriedade':
 * @property integer $propriedade_id
 * @property integer $saf_id
 * @property integer $area_total
 * @property integer $num_areas_saf
 * @property string $praticas_agroflorestais
 * @property integer $perc_saf
 * @property integer $perc_cultivo
 * @property integer $perc_hortas
 * @property integer $perc_app
 * @property integer $perc_reservalegal
 * @property string $dados_brutos
 *
 * The followings are the available model relations:
 * @property PraticasManejo[] $praticasManejos
 * @property Agroflorestas $saf
 */
class Propriedade extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Propriedade the static model class
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
		return 'propriedade';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('saf_id, area_total, num_areas_saf, perc_saf, perc_cultivo, perc_hortas, perc_app, perc_reservalegal', 'numerical', 'integerOnly'=>true),
			array('praticas_agroflorestais', 'length', 'max'=>600),
			array('dados_brutos', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('propriedade_id, saf_id, area_total, num_areas_saf, praticas_agroflorestais, perc_saf, perc_cultivo, perc_hortas, perc_app, perc_reservalegal, dados_brutos', 'safe', 'on'=>'search'),
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
			'praticasManejos' => array(self::HAS_MANY, 'PraticasManejo', 'propriedade_id'),
			'saf' => array(self::BELONGS_TO, 'Agroflorestas', 'saf_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'propriedade_id' => 'Propriedade',
			'saf_id' => 'Saf',
			'area_total' => 'Área total (em ha)',
			'num_areas_saf' => 'Número de áreas com SAF',
			'praticas_agroflorestais' => 'Práticas agroflorestais utilizadas na propriedade',
			'perc_saf' => '(%) SAF',
			'perc_cultivo' => '(%) cultivo sem criações',
			'perc_hortas' => '(%) hortas',
			'perc_app' => '(%) APP',
			'perc_reservalegal' => '(%) Reserva legal',
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

		$criteria->compare('propriedade_id',$this->propriedade_id);
		$criteria->compare('saf_id',$this->saf_id);
		$criteria->compare('area_total',$this->area_total);
		$criteria->compare('num_areas_saf',$this->num_areas_saf);
		$criteria->compare('praticas_agroflorestais',$this->praticas_agroflorestais,true);
		$criteria->compare('perc_saf',$this->perc_saf);
		$criteria->compare('perc_cultivo',$this->perc_cultivo);
		$criteria->compare('perc_hortas',$this->perc_hortas);
		$criteria->compare('perc_app',$this->perc_app);
		$criteria->compare('perc_reservalegal',$this->perc_reservalegal);
		$criteria->compare('dados_brutos',$this->dados_brutos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
