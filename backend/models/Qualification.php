<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "qualification".
 *
 * @property integer $QUALIFICATION_ID
 * @property integer $PROVIDER_ID
 * @property string $DEGREE
 * @property string $INSTITUTE
 * @property string $COURSE_TYPE
 * @property integer $BATCH_START
 * @property integer $BATCH_END
 * @property string $certificateAwards
 */
class Qualification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qualification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PROVIDER_ID', 'BATCH_START', 'BATCH_END'], 'integer'],
            [[], 'required'],
            [['certificateAwards'], 'string'],
            [['DEGREE'], 'string', 'max' => 50],
            [['INSTITUTE'], 'string', 'max' => 100],
            [['COURSE_TYPE'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'QUALIFICATION_ID' => 'Qualification  ID',
            'PROVIDER_ID' => 'Provider  ID',
            'DEGREE' => 'Degree',
            'INSTITUTE' => 'Institute',
            'COURSE_TYPE' => 'Course  Type',
            'BATCH_START' => 'Batch  Start',
            'BATCH_END' => 'Batch  End',
            'certificateAwards' => 'Certificate Awards',
        ];
    }

    public function getProvider(){
        return $this->hasOne(Provider::className(),['PROVIDER_ID'=>'PROVIDER_ID']);
    }
}
