<?php

/**
 * This is the model class for table "comercializacao".
 *
 * The followings are the available columns in table 'comercializacao':
 * @property integer $comercializacao_id
 * @property integer $saf_id
 * @property string $produto_escoado
 * @property string $transporte
 * @property string $forma_escoamento
 * @property string $tipo_mercado
 * @property string $estrutura_comerc
 * @property string $local_comerc
 * @property string $consumidor_final
 * @property string $dificuldade_comerc
 * @property string $dificuldades_legislacao
 * @property string $inicializacao
 * @property string $implantacao
 * @property string $pontos_positivos
 * @property string $dificuldade
 * @property integer $receita_total
 * @property integer $perc_receita_saf
 * @property string $dados_brutos
 *
 * The followings are the available model relations:
 * @property Agroflorestas $saf
 * @property Venda[] $vendas
 */
class Comercializacao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comercializacao the static model class
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
		return 'comercializacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('saf_id, receita_total, perc_receita_saf', 'numerical', 'integerOnly'=>true),
			array('produto_escoado, transporte, forma_escoamento, tipo_mercado, estrutura_comerc, local_comerc, consumidor_final, dificuldade_comerc', 'length', 'max'=>50),
			array('dificuldades_legislacao, inicializacao, implantacao, pontos_positivos, dificuldade, dados_brutos', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('comercializacao_id, saf_id, produto_escoado, transporte, forma_escoamento, tipo_mercado, estrutura_comerc, local_comerc, consumidor_final, dificuldade_comerc, dificuldades_legislacao, inicializacao, implantacao, pontos_positivos, dificuldade, receita_total, perc_receita_saf, dados_brutos', 'safe', 'on'=>'search'),
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
			'vendas' => array(self::HAS_MANY, 'Venda', 'saf_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'comercializacao_id' => 'Comercializacao',
			'saf_id' => 'Saf',
			'produto_escoado' => 'Produto Escoado',
			'transporte' => 'Transporte',
			'forma_escoamento' => 'Forma de escoamento',
			'tipo_mercado' => 'Tipo de mercado',
			'estrutura_comerc' => 'Estrutura de comercialização',
			'local_comerc' => 'Local de comercialização',
			'consumidor_final' => 'Consumidor Final',
			'dificuldade_comerc' => 'Dificuldade de comercialização',
			'dificuldades_legislacao' => 'Dificuldade de legislação',
			'inicializacao' => 'Como iniciou a comercialização:',
			'implantacao' => 'Como implantou a estrutura de comercialização',
			'pontos_positivos' => 'Pontos positivos com comercialização',
			'dificuldade' => 'Dificuldades de comercialização',
			'receita_total' => 'Receita total',
			'perc_receita_saf' => 'Percentual de receita com Saf',
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

		$criteria->compare('comercializacao_id',$this->comercializacao_id);
		$criteria->compare('saf_id',$this->saf_id);
		$criteria->compare('produto_escoado',$this->produto_escoado,true);
		$criteria->compare('transporte',$this->transporte,true);
		$criteria->compare('forma_escoamento',$this->forma_escoamento,true);
		$criteria->compare('tipo_mercado',$this->tipo_mercado,true);
		$criteria->compare('estrutura_comerc',$this->estrutura_comerc,true);
		$criteria->compare('local_comerc',$this->local_comerc,true);
		$criteria->compare('consumidor_final',$this->consumidor_final,true);
		$criteria->compare('dificuldade_comerc',$this->dificuldade_comerc,true);
		$criteria->compare('dificuldades_legislacao',$this->dificuldades_legislacao,true);
		$criteria->compare('inicializacao',$this->inicializacao,true);
		$criteria->compare('implantacao',$this->implantacao,true);
		$criteria->compare('pontos_positivos',$this->pontos_positivos,true);
		$criteria->compare('dificuldade',$this->dificuldade,true);
		$criteria->compare('receita_total',$this->receita_total);
		$criteria->compare('perc_receita_saf',$this->perc_receita_saf);
		$criteria->compare('dados_brutos',$this->dados_brutos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
