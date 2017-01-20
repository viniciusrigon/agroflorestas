<?php

/**
 * This is the model class for table "beneficiamento".
 *
 * The followings are the available columns in table 'beneficiamento':
 * @property integer $beneficiamento_id
 * @property integer $saf_id
 * @property string $produto_beneficiado
 * @property integer $distancia
 * @property string $tecnica
 * @property string $produto_final
 * @property string $tipo_producao
 * @property string $escala_producao
 * @property string $destino_principal
 * @property string $dificuldades_beneficiamento
 * @property string $dificuldades_legislacao
 * @property string $local
 * @property string $inicio_beneficiamento
 * @property string $implantacao
 * @property string $pontos_positivos
 * @property string $entraves
 * @property string $dados_brutos
 *
 * The followings are the available model relations:
 * @property Agroflorestas $saf
 */
class Beneficiamento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Beneficiamento the static model class
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
		return 'beneficiamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('saf_id, distancia', 'numerical', 'integerOnly'=>true),
			array('produto_beneficiado, tecnica, produto_final, tipo_producao, escala_producao, destino_principal', 'length', 'max'=>50),
			array('dificuldades_beneficiamento, dificuldades_legislacao, local, inicio_beneficiamento, implantacao, pontos_positivos, entraves, dados_brutos', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('beneficiamento_id, saf_id, produto_beneficiado, distancia, tecnica, produto_final, tipo_producao, escala_producao, destino_principal, dificuldades_beneficiamento, dificuldades_legislacao, local, inicio_beneficiamento, implantacao, pontos_positivos, entraves, dados_brutos', 'safe', 'on'=>'search'),
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
			'beneficiamento_id' => 'Beneficiamento',
			'saf_id' => 'Saf',
			'produto_beneficiado' => 'Produto Beneficiado',
			'distancia' => 'Distância do local de colata para o local de beneficiamento',
			'tecnica' => 'Técnica',
			'produto_final' => 'Produto Final',
			'tipo_producao' => 'Tipo de produção',
			'escala_producao' => 'Escala de produção',
			'destino_principal' => 'Destino Principal',
			'dificuldades_beneficiamento' => 'Dificuldades de beneficiamento',
			'dificuldades_legislacao' => 'Dificuldades da legislação',
			'local' => 'Local de beneficiamento',
			'inicio_beneficiamento' => 'Como iniciou o beneficiamento',
			'implantacao' => 'Como implantou a estrutura de beneficiamento',
			'pontos_positivos' => 'Pontos positivos alcançados com o beneficiamento',
			'entraves' => 'Se não beneficia, por quê? Quais entraves?',
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

		$criteria->compare('beneficiamento_id',$this->beneficiamento_id);
		$criteria->compare('saf_id',$this->saf_id);
		$criteria->compare('produto_beneficiado',$this->produto_beneficiado,true);
		$criteria->compare('distancia',$this->distancia);
		$criteria->compare('tecnica',$this->tecnica,true);
		$criteria->compare('produto_final',$this->produto_final,true);
		$criteria->compare('tipo_producao',$this->tipo_producao,true);
		$criteria->compare('escala_producao',$this->escala_producao,true);
		$criteria->compare('destino_principal',$this->destino_principal,true);
		$criteria->compare('dificuldades_beneficiamento',$this->dificuldades_beneficiamento,true);
		$criteria->compare('dificuldades_legislacao',$this->dificuldades_legislacao,true);
		$criteria->compare('local',$this->local,true);
		$criteria->compare('inicio_beneficiamento',$this->inicio_beneficiamento,true);
		$criteria->compare('implantacao',$this->implantacao,true);
		$criteria->compare('pontos_positivos',$this->pontos_positivos,true);
		$criteria->compare('entraves',$this->entraves,true);
		$criteria->compare('dados_brutos',$this->dados_brutos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
