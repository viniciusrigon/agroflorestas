<?php

/**
 * This is the model class for table "rede_sociotecnica".
 *
 * The followings are the available columns in table 'rede_sociotecnica':
 * @property integer $rede_socio_id
 * @property integer $saf_id
 * @property string $assistencia
 * @property string $membro_assoc
 * @property string $beneficio_assoc
 * @property string $dificuldades
 * @property string $utiliza_credito
 * @property string $acesso_credito
 * @property string $participa_cursos
 * @property string $dados_brutos
 *
 * The followings are the available model relations:
 * @property Agroflorestas $saf
 */
class RedeSociotecnica extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RedeSociotecnica the static model class
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
		return 'rede_sociotecnica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('saf_id', 'numerical', 'integerOnly'=>true),
			array('assistencia, membro_assoc, beneficio_assoc, dificuldades, utiliza_credito, acesso_credito, participa_cursos, dados_brutos', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rede_socio_id, saf_id, assistencia, membro_assoc, beneficio_assoc, dificuldades, utiliza_credito, acesso_credito, participa_cursos, dados_brutos', 'safe', 'on'=>'search'),
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
			'saf' => array(self::BELONGS_TO, 'Agroflorestas', 'saf_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rede_socio_id' => 'Rede Socio',
			'saf_id' => 'Saf',
			'assistencia' => 'Recebe assistência técnica de alguma organização para desenvolver o manejo do SAF?',
			'membro_assoc' => 'É membro de uma associação de produtores (ou organização equivalente)? Como é a atuação nela?',
			'beneficio_assoc' => 'Quais os benefícios obtidos desta associação',
			'dificuldades' => 'Quais as dificuldades da associação',
			'utiliza_credito' => 'Utiliza crédito rural, para investir no SAF',
			'acesso_credito' => 'Como é o acesso ao crédito, financiamento para o manejo do SAF',
			'participa_cursos' => 'Participa de cursos, encontros sobre SAF’s ou de Agroecologia',
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

		$criteria->compare('rede_socio_id',$this->rede_socio_id);
		$criteria->compare('saf_id',$this->saf_id);
		$criteria->compare('assistencia',$this->assistencia,true);
		$criteria->compare('membro_assoc',$this->membro_assoc,true);
		$criteria->compare('beneficio_assoc',$this->beneficio_assoc,true);
		$criteria->compare('dificuldades',$this->dificuldades,true);
		$criteria->compare('utiliza_credito',$this->utiliza_credito,true);
		$criteria->compare('acesso_credito',$this->acesso_credito,true);
		$criteria->compare('participa_cursos',$this->participa_cursos,true);
		$criteria->compare('dados_brutos',$this->dados_brutos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
