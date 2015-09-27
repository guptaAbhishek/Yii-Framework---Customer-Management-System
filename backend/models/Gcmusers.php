<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gcmusers".
 *
 * @property integer $id
 * @property string $emailid
 * @property string $gcmregid
 */
class Gcmusers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gcmusers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emailid', 'gcmregid'], 'required'],
            [['emailid'], 'string', 'max' => 50],
            [['gcmregid'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emailid' => 'Emailid',
            'gcmregid' => 'Gcmregid',
        ];
    }
}
