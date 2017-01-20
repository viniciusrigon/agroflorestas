<?php

/**
 * This is the model class for table "menu".
 *
 * The followings are the available columns in table 'menu':
 * @property integer $Id
 * @property integer $IdGrupo
 * @property string $nomeMenu
 * @property string $urlMenu
 *
 * The followings are the available model relations:
 * @property Grupo $idGrupo
 */
class Menu extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Menu the static model class
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
		return 'menu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IdGrupo', 'numerical', 'integerOnly'=>true),
			array('nomeMenu, urlMenu', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, IdGrupo, nomeMenu, urlMenu', 'safe', 'on'=>'search'),
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
			'idGrupo' => array(self::BELONGS_TO, 'Grupo', 'IdGrupo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'IdGrupo' => 'Id Grupo',
			'nomeMenu' => 'Nome Menu',
			'urlMenu' => 'Url Menu',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('IdGrupo',$this->IdGrupo);
		$criteria->compare('nomeMenu',$this->nomeMenu,true);
		$criteria->compare('urlMenu',$this->urlMenu,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}