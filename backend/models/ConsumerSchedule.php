<?php

namespace app\models;

use Yii;
use backend\models\Provider;

/**
 * This is the model class for table "consumer_schedule".
 *
 * @property integer $SCHEDULE_ID
 * @property string $PROFILE
 * @property integer $CONSUMER_ID
 * @property integer $PROVIDER_ID
 * @property string $TYPE_OF_SERVICE
 * @property string $VENUE
 * @property string $VENUE_LAT
 * @property string $VENUE_LONG
 * @property string $START_DATE
 * @property string $END_DATE
 * @property string $MON
 * @property string $TUE
 * @property string $WED
 * @property string $THURS
 * @property string $FRI
 * @property string $SAT
 * @property string $SUN
 * @property string $PROMO_CODE
 * @property integer $RATE
 */
class ConsumerSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'consumer_schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CONSUMER_ID', 'PROVIDER_ID', 'RATE'], 'integer'],
            [['VENUE', 'VENUE_LAT', 'VENUE_LONG', 'START_DATE', 'END_DATE', 'RATE'], 'required'],
            [['START_DATE', 'END_DATE'], 'safe'],
            [['PROFILE'], 'string', 'max' => 11],
            [['TYPE_OF_SERVICE', 'PROMO_CODE'], 'string', 'max' => 50],
            [['VENUE'], 'string', 'max' => 100],
            [['VENUE_LAT', 'VENUE_LONG'], 'string', 'max' => 20],
            [['MON', 'TUE', 'WED', 'THURS', 'FRI', 'SAT', 'SUN'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SCHEDULE_ID' => 'Schedule  ID',
            'PROFILE' => 'Profile',
            'CONSUMER_ID' => 'Consumer  ID',
            'PROVIDER_ID' => 'Provider  ID',
            'TYPE_OF_SERVICE' => 'Type  Of  Service',
            'VENUE' => 'Venue',
            'VENUE_LAT' => 'Venue  Lat',
            'VENUE_LONG' => 'Venue  Long',
            'START_DATE' => 'Start  Date',
            'END_DATE' => 'End  Date',
            'MON' => 'Mon',
            'TUE' => 'Tue',
            'WED' => 'Wed',
            'THURS' => 'Thurs',
            'FRI' => 'Fri',
            'SAT' => 'Sat',
            'SUN' => 'Sun',
            'PROMO_CODE' => 'Promo  Code',
            'RATE' => 'Rate',
        ];
    }

    public function getProvider(){
        return $this->hasOne(Provider::className(),['SCHEDULE_ID'=>'PROVIDER_ID']);
    }
}
