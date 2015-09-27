<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ConsumerSchedule;

/**
 * ConsumerScheduleSearch represents the model behind the search form about `app\models\ConsumerSchedule`.
 */
class ConsumerScheduleSearch extends ConsumerSchedule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SCHEDULE_ID', 'CONSUMER_ID', 'PROVIDER_ID', 'RATE'], 'integer'],
            [['PROFILE', 'TYPE_OF_SERVICE', 'VENUE', 'VENUE_LAT', 'VENUE_LONG', 'START_DATE', 'END_DATE', 'MON', 'TUE', 'WED', 'THURS', 'FRI', 'SAT', 'SUN', 'PROMO_CODE'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ConsumerSchedule::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'SCHEDULE_ID' => $this->SCHEDULE_ID,
            'CONSUMER_ID' => $this->CONSUMER_ID,
            'PROVIDER_ID' => $this->PROVIDER_ID,
            'START_DATE' => $this->START_DATE,
            'END_DATE' => $this->END_DATE,
            'RATE' => $this->RATE,
        ]);

        $query->andFilterWhere(['like', 'PROFILE', $this->PROFILE])
            ->andFilterWhere(['like', 'TYPE_OF_SERVICE', $this->TYPE_OF_SERVICE])
            ->andFilterWhere(['like', 'VENUE', $this->VENUE])
            ->andFilterWhere(['like', 'VENUE_LAT', $this->VENUE_LAT])
            ->andFilterWhere(['like', 'VENUE_LONG', $this->VENUE_LONG])
            ->andFilterWhere(['like', 'MON', $this->MON])
            ->andFilterWhere(['like', 'TUE', $this->TUE])
            ->andFilterWhere(['like', 'WED', $this->WED])
            ->andFilterWhere(['like', 'THURS', $this->THURS])
            ->andFilterWhere(['like', 'FRI', $this->FRI])
            ->andFilterWhere(['like', 'SAT', $this->SAT])
            ->andFilterWhere(['like', 'SUN', $this->SUN])
            ->andFilterWhere(['like', 'PROMO_CODE', $this->PROMO_CODE]);

        return $dataProvider;
    }
}
