<?php

/**
 * This is the model class for table "perspectiva".
 *
 * The followings are the available columns in table 'perspectiva':
 * @property integer $perspectiva_id
 * @property integer $saf_id
 * @property string $imagina
 * @property string $rede_apoio
 * @property string $visitas
 * @property string $dados_brutos
 *
 * The followings are the available model relations:
 * @property Agroflorestas $saf
 */
class Perspectiva extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Perspectiva the static model class
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
		return 'perspectiva';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('saf_id', 'required'),
			array('saf_id', 'numerical', 'integerOnly'=>true),
			array('imagina, rede_apoio, visitas, dados_brutos', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('perspectiva_id, saf_id, imagina, rede_apoio, visitas, dados_brutos', 'safe', 'on'=>'search'),
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
			'perspectiva_id' => 'Perspectiva',
			'saf_id' => 'Saf',
			'imagina' => 'Como vocês se imaginam daqui há 8 anos?',
			'rede_apoio' => 'Gostaria de participar de uma rede de apoio aos SAF?',
			'visitas' => 'Gostaria de receber a visita de outros agricultores e estudantes que trabalham com SAF?',
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

		$criteria->compare('perspectiva_id',$this->perspectiva_id);
		$criteria->compare('saf_id',$this->saf_id);
		$criteria->compare('imagina',$this->imagina,true);
		$criteria->compare('rede_apoio',$this->rede_apoio,true);
		$criteria->compare('visitas',$this->visitas,true);
		$criteria->compare('dados_brutos',$this->dados_brutos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
