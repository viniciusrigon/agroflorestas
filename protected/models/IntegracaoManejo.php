 <?php

/**
 * This is the model class for table "integracao_manejo".
 *
 * The followings are the available columns in table 'integracao_manejo':
 * @property integer $integracao_id
 * @property integer $manejo_id
 * @property string $integracao_saf
 * @property string $material_propativo
 * @property string $mudas_semestes
 * @property string $viveitos_proximos
 * @property string $custos_estimados_saf
 *
 * The followings are the available model relations:
 * @property PraticasManejo $manejo
 */
class IntegracaoManejo extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return IntegracaoManejo the static model class
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
        return 'integracao_manejo';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('manejo_id', 'numerical', 'integerOnly'=>true),
            array('integracao_saf, material_propativo, mudas_semestes, viveitos_proximos, custos_estimados_saf', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('integracao_id, manejo_id, integracao_saf, material_propativo, mudas_semestes, viveitos_proximos, custos_estimados_saf', 'safe', 'on'=>'search'),
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
            'manejo' => array(self::BELONGS_TO, 'PraticasManejo', 'manejo_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'integracao_id' => 'Integracao',
            'manejo_id' => 'Manejo',
            'integracao_saf' => 'Integração do SAF com outras áreas da propriedade',
            'material_propativo' => 'Material propagativo de difícil obtenção',
            'mudas_semestes' => 'Quais mudas/sementes gostaria de adquirir',
            'viveitos_proximos' => 'Existem viveiros próximos',
            'custos_estimados_saf' => 'Estimativa de custos total dos SAFs',
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

        $criteria->compare('integracao_id',$this->integracao_id);
        $criteria->compare('manejo_id',$this->manejo_id);
        $criteria->compare('integracao_saf',$this->integracao_saf,true);
        $criteria->compare('material_propativo',$this->material_propativo,true);
        $criteria->compare('mudas_semestes',$this->mudas_semestes,true);
        $criteria->compare('viveitos_proximos',$this->viveitos_proximos,true);
        $criteria->compare('custos_estimados_saf',$this->custos_estimados_saf,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
} 
