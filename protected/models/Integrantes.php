<?php

/**
 * This is the model class for table "integrantes".
 *
 * The followings are the available columns in table 'integrantes':
 * @property integer $integrantes_id
 * @property integer $familia_id
 * @property string $nome
 * @property string $ano_nasc
 * @property string $parentesco
 * @property string $ocupacao
 * @property string $tempo_residencia
 *
 * The followings are the available model relations:
 * @property Familia $familia
 */
class Integrantes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'integrantes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('familia_id', 'required'),
			array('familia_id', 'numerical', 'integerOnly'=>true),
			array('nome, ocupacao', 'length', 'max'=>50),
			array('parentesco', 'length', 'max'=>20),
			array('tempo_residencia', 'length', 'max'=>30),
			array('ano_nasc', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('integrantes_id, familia_id, nome, ano_nasc, parentesco, ocupacao, tempo_residencia', 'safe', 'on'=>'search'),
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
			'familia' => array(self::BELONGS_TO, 'Familia', 'familia_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'integrantes_id' => 'Integrantes',
			'familia_id' => 'Familia',
			'nome' => 'Nome',
			'ano_nasc' => 'Data de nascimento',
			'parentesco' => 'Parentesco',
			'ocupacao' => 'Ocupação Principal',
			'tempo_residencia' => 'Tempo de residência na propriedade',
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

		$criteria->compare('integrantes_id',$this->integrantes_id);
		$criteria->compare('familia_id',$this->familia_id);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('ano_nasc',$this->ano_nasc,true);
		$criteria->compare('parentesco',$this->parentesco,true);
		$criteria->compare('ocupacao',$this->ocupacao,true);
		$criteria->compare('tempo_residencia',$this->tempo_residencia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Integrantes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
