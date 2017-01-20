<?php

/**
 * This is the model class for table "familia".
 *
 * The followings are the available columns in table 'familia':
 * @property integer $familia_id
 * @property integer $saf_id
 * @property string $local_origem
 * @property string $composicao_renda
 * @property string $dados_brutos
 *
 * The followings are the available model relations:
 * @property Agroflorestas $saf
 * @property Integrantes[] $integrantes
 */
class Familia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Familia the static model class
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
		return 'familia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('saf_id, composicao_renda, dados_brutos', 'required'),
			array('saf_id', 'numerical', 'integerOnly'=>true),
			array('local_origem', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('familia_id, saf_id, local_origem, composicao_renda, dados_brutos', 'safe', 'on'=>'search'),
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
			'integrantes' => array(self::HAS_MANY, 'Integrantes', 'familia_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'familia_id' => 'Familia',
			'saf_id' => 'Saf',
			'local_origem' => 'Local de origem',
			'composicao_renda' => 'Composicao da renda',
			'dados_brutos' => 'Dados brutos',
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

		$criteria->compare('familia_id',$this->familia_id);
		$criteria->compare('saf_id',$this->saf_id);
		$criteria->compare('local_origem',$this->local_origem,true);
		$criteria->compare('composicao_renda',$this->composicao_renda,true);
		$criteria->compare('dados_brutos',$this->dados_brutos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
