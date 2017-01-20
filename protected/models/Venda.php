<?php

/**
 * This is the model class for table "venda".
 *
 * The followings are the available columns in table 'venda':
 * @property integer $venda_id
 * @property integer $saf_id
 * @property string $produto_vendido
 * @property string $unidade
 * @property integer $quantidade
 * @property string $preco_unitario
 * @property string $total
 *
 * The followings are the available model relations:
 * @property Comercializacao $saf
 */
class Venda extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Venda the static model class
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
		return 'venda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('saf_id, quantidade', 'numerical', 'integerOnly'=>true),
			array('produto_vendido, unidade', 'length', 'max'=>50),
			array('preco_unitario, total', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('venda_id, saf_id, produto_vendido, unidade, quantidade, preco_unitario, total', 'safe', 'on'=>'search'),
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
			'saf' => array(self::BELONGS_TO, 'Comercializacao', 'saf_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'venda_id' => 'Venda',
			'saf_id' => 'Saf',
			'produto_vendido' => 'Produto vendido',
			'unidade' => 'Unidade',
			'quantidade' => 'Quantidade',
			'preco_unitario' => 'Preco unitário',
			'total' => 'Total',
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

		$criteria->compare('venda_id',$this->venda_id);
		$criteria->compare('saf_id',$this->saf_id);
		$criteria->compare('produto_vendido',$this->produto_vendido,true);
		$criteria->compare('unidade',$this->unidade,true);
		$criteria->compare('quantidade',$this->quantidade);
		$criteria->compare('preco_unitario',$this->preco_unitario,true);
		$criteria->compare('total',$this->total,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
