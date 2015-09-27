<?php

namespace app\models;

use Yii;
use app\models\Consumer;

/**
 * This is the model class for table "provider".
 *
 * @property integer $PROVIDER_ID
 * @property string $NAME
 * @property string $EMAIL_ADDRESS
 * @property string $PrimaryPhoneNum
 * @property string $SecondaryPhoneNum
 * @property string $ProviderIdProof
 * @property string $PASSWORD
 * @property string $BIRTH_DATE
 * @property string $ADDRESS
 * @property string $City
 * @property string $GENDER
 * @property string $ExperienceYear
 * @property string $ExperienceMonths
 * @property string $CREATED_DT
 * @property string $LAST_UPDATED_DT
 * @property string $ReferredBy
 * @property string $PreferredLocation
 * @property string $YogaStyle
 * @property string $AboutTrainer
 * @property integer $TrainerBlackList
 * @property integer $del
 * @property string $NotesByTrainer
 * @property string $NextCallDate
 * @property string $AvailableOn
 * @property string $AddedBy
 * @property string $rateOfProvider
 */
class Provider extends \yii\db\ActiveRecord
{

    private $_ProviderIdProof = array();
    private $_YogaStyle = array();
    private $_AvailableOn = array();
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'provider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NAME','PrimaryPhoneNum'], 'required'],
            [['AboutTrainer', 'NotesByTrainer', 'AddedBy', 'rateOfProvider'], 'string'],
            [['BIRTH_DATE', 'CREATED_DT', 'LAST_UPDATED_DT','AvailableOn'], 'safe'],
            [['delete'], 'integer'],
            [['NAME', 'PASSWORD', 'ADDRESS'], 'string', 'max' => 200],
            [['EMAIL_ADDRESS'], 'string', 'max' => 100],
            [['PrimaryPhoneNum', 'SecondaryPhoneNum', 'City', 'ExperienceMonths', 'ReferredBy'], 'string', 'max' => 20],
            [['GENDER'], 'string', 'max' => 10],
            [['ExperienceYear'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PROVIDER_ID' => 'Provider  ID',
            'NAME' => 'Name',
            'EMAIL_ADDRESS' => 'Email  Address',
            'PrimaryPhoneNum' => 'Primary Phone Num',
            'SecondaryPhoneNum' => 'Secondary Phone Num',
            'ProviderIdProof' => 'Provider Id Proof',
            'PASSWORD' => 'Password',
            'BIRTH_DATE' => 'Birth  Date',
            'ADDRESS' => 'Address',
            'City' => 'City',
            'GENDER' => 'Gender',
            'ExperienceYear' => 'Experience Year',
            'ExperienceMonths' => 'Experience Months',
            'CREATED_DT' => 'Created  Dt',
            'LAST_UPDATED_DT' => 'Last  Updated  Dt',
            'ReferredBy' => 'Referred By',
            'PreferredLocation' => 'Preferred Location',
            'YogaStyle' => 'Yoga Style',
            'AboutTrainer' => 'About Trainer',
            'TrainerBlackList' => 'Trainer Black List',
            'del' => 'Del',
            'NotesByTrainer' => 'Notes By Trainer',
            'NextCallDate' => 'Next Call Date',
            'AvailableOn' => 'Available On - Timing',
            'AddedBy' => 'Added By',
            'rateOfProvider' => 'Price Per Month',
            
        ];
    }

    public function getNamegender(){
        return $this->NAME ." ".$this->GENDER;
    }

     public function beforeSave($insert) {
        if ($this->isNewRecord)
            $this->CREATED_DT = new \yii\db\Expression('NOW()');
        else
            $this->LAST_UPDATED_DT = new \yii\db\Expression('NOW()');
     
        return parent::beforeSave($insert);
    }

    public function getQualification(){
        return $this->hasMany(Qualification::className(),['PROVIDER_ID'=>'QUALIFICATION_ID']);
    }

    public function getConsumerSchedule(){
        return $this->hasMany(ConsumerSchedule::className(),['PROVIDER_ID','SCHEDULE_ID']);
    }

    public function getConsumer(){
        return $this->hasMany(Consumer::className(),['PROVIDER_ID'=>'CONSUMER_ID']);
    }

    public function getTiming(){
        $timing = array();
        for($i = 5;$i<12;$i++){
            $timing = $i.':00 AM';
        }
        $timing = '12:00 PM';
        for($i = 1;$i<12;$i++){
            $timing = $i.':00 PM';   
        }
        $timing = '12:00 AM';

        return $timing;
    }

}
