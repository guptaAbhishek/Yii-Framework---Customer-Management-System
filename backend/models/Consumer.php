<?php

namespace app\models;

use Yii;
use app\models\Provider;

/**
 * This is the model class for table "consumer".
 *
 * @property integer $CONSUMER_ID
 * @property string $NAME
 * @property string $PHONE_NUM
 * @property string $EMAIL_ADDRESS
 * @property string $PASSWORD
 * @property string $BIRTH_DATE
 * @property string $ADDRESS
 * @property string $ZONE
 * @property string $GENDER
 * @property string $CREATED_DT
 * @property string $LAST_UPDATED_DT
 * @property string $TrailClass
 * @property string $Notes
 * @property string $Source
 * @property integer $Budget
 * @property string $ReqTrainerGender
 * @property string $StartDateTime
 * @property string $EndDateTime
 * @property integer $del
 * @property string $wayToContact
 * @property string $leadStatus
 * @property string $nextCallDate
 * @property string $yogaStyle
 * @property string $DaysOfTheWeek
 * @property string $Duration
 * @property string $Timing
 * @property string $AddedBy
 * @property string $numOfDaysAWeek
 * @property string $numOfPeople
 * @property integer $countNumPeople
 */
class Consumer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    private $yogaStyle = array();
    private $DaysOfTheWeek = array();
    

    public static function tableName()
    {
        return 'consumer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NAME', 'PHONE_NUM'], 'required'],
            [['BIRTH_DATE', 'CREATED_DT', 'LAST_UPDATED_DT', 'nextCallDate','yogaStyle'], 'safe'],
            [['Notes', 'numOfPeople'], 'string'],
            [['del', 'countNumPeople'], 'integer'],
            [['NAME', 'PASSWORD', 'ADDRESS'], 'string', 'max' => 200],
            [['PHONE_NUM', 'GENDER', 'numOfDaysAWeek'], 'string', 'max' => 10],
            [['EMAIL_ADDRESS'], 'string', 'max' => 100],
            [['ZONE', 'TrailClass', 'ReqTrainerGender', 'StartDateTime', 'EndDateTime', 'Duration'], 'string', 'max' => 20],
            [['Source', 'AddedBy'], 'string', 'max' => 30],
            [['leadStatus'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CONSUMER_ID' => 'Consumer  ID',
            'NAME' => 'Name',
            'PHONE_NUM' => 'Phone  Num',
            'EMAIL_ADDRESS' => 'Email  Address',
            'PASSWORD' => 'Password',
            'BIRTH_DATE' => 'Birth  Date',
            'ADDRESS' => 'Address',
            'ZONE' => 'Zone',
            'GENDER' => 'Gender',
            'CREATED_DT' => 'Created  Dt',
            'LAST_UPDATED_DT' => 'Last  Updated  Dt',
            'TrailClass' => 'Trail Class',
            'Notes' => 'Notes',
            'Source' => 'Source',
            'Budget' => 'Budget',
            'ReqTrainerGender' => 'Req Trainer Gender',
            'StartDateTime' => 'Start Date Time',
            'EndDateTime' => 'End Date Time',
            'del' => 'Del',
            'wayToContact' => 'Way To Contact',
            'leadStatus' => 'Lead Status',
            'nextCallDate' => 'Next Call Date',
            'yogaStyle' => 'Yoga Style',
            'DaysOfTheWeek' => 'Days Of The Week',
            'Duration' => 'Duration',
            'Timing' => 'Timing',
            'AddedBy' => 'Added By',
            'numOfDaysAWeek' => 'Days A week',
            'numOfPeople' => 'Num Of People',
            'countNumPeople' => 'Count',
        ];
    }
     public function beforeSave($insert) {
        if ($this->isNewRecord)
            $this->CREATED_DT = new \yii\db\Expression('NOW()');
        else
            $this->LAST_UPDATED_DT = new \yii\db\Expression('NOW()');
     
        return parent::beforeSave($insert);
    }

    public function getDaysOfTheWeek(){
        return[
            'monday'=>'Monday',
            'tuesday'=>'Tuesday',
            'wednesday'=>'Wednesday',
            'thursday' => 'Thursday',
            'friday' => 'Friday',
            'saturday' => 'Saturday',
            'sunday' => 'Sunday',
        ];
    }

    public function getProvider(){
        return $this->hasOne(Provider::className(),['CONSUMER_ID'=>'PROVIDER_ID']);
    }
}
