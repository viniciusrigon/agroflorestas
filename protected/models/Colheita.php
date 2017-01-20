<?php

/**
 * This is the model class for table "colheita".
 *
 * The followings are the available columns in table 'colheita':
 * @property integer $colheita_id
 * @property integer $vegetais_id
 * @property string $produto
 * @property integer $quantidade
 * @property string $forma_colheita
 * @property string $ferramentas
 * @property string $frequencia
 * @property string $periodo_do_ano
 * @property string $dados_brutos
 *
 * The followings are the available model relations:
 * @property EspeciesVegetaisManejadas $vegetais
 */
class Colheita extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'colheita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vegetais_id', 'required'),
			array('vegetais_id, quantidade', 'numerical', 'integerOnly'=>true),
			array('produto, forma_colheita, frequencia, periodo_do_ano', 'length', 'max'=>50),
			array('ferramentas', 'length', 'max'=>100),
			array('dados_brutos', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('colheita_id, vegetais_id, produto, quantidade, forma_colheita, ferramentas, frequencia, periodo_do_ano, dados_brutos', 'safe', 'on'=>'search'),
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
			'vegetais' => array(self::BELONGS_TO, 'EspeciesVegetaisManejadas', 'vegetais_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'colheita_id' => 'Colheita',
			'vegetais_id' => 'Vegetais',
			'produto' => 'Produto',
			'quantidade' => 'Quantidade',
			'forma_colheita' => 'Forma Colheita',
			'ferramentas' => 'Ferramentas',
			'frequencia' => 'Frequencia',
			'periodo_do_ano' => 'Periodo Do Ano',
			'dados_brutos' => 'Dados Brutos',
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

		$criteria->compare('colheita_id',$this->colheita_id);
		$criteria->compare('vegetais_id',$this->vegetais_id);
		$criteria->compare('produto',$this->produto,true);
		$criteria->compare('quantidade',$this->quantidade);
		$criteria->compare('forma_colheita',$this->forma_colheita,true);
		$criteria->compare('ferramentas',$this->ferramentas,true);
		$criteria->compare('frequencia',$this->frequencia,true);
		$criteria->compare('periodo_do_ano',$this->periodo_do_ano,true);
		$criteria->compare('dados_brutos',$this->dados_brutos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Colheita the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
