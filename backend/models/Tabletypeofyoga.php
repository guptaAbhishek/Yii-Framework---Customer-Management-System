<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabletypeofyoga".
 *
 * @property integer $TypeOfYogaId
 * @property string $TypeOfYogaName
 */
class Tabletypeofyoga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tabletypeofyoga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TypeOfYogaName'], 'required'],
            [['TypeOfYogaName'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TypeOfYogaId' => 'Type Of Yoga ID',
            'TypeOfYogaName' => 'Type Of Yoga Name',
        ];
    }


    
}
