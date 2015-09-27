<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Consumer;

/**
 * ConsumerSearch represents the model behind the search form about `app\models\Consumer`.
 */
class ConsumerSearch extends Consumer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CONSUMER_ID', 'Budget', 'del'], 'integer'],
            [['NAME', 'PHONE_NUM', 'EMAIL_ADDRESS', 'PASSWORD', 'BIRTH_DATE', 'ADDRESS', 'ZONE', 'GENDER', 'CREATED_DT', 'LAST_UPDATED_DT', 'TrailClass', 'Notes', 'Source', 'ReqTrainerGender', 'StartDateTime', 'EndDateTime', 'wayToContact', 'leadStatus'], 'safe'],
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
        $query = Consumer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->orderBy(['CONSUMER_ID'=>SORT_DESC]);

        $query->andFilterWhere([
            'CONSUMER_ID' => $this->CONSUMER_ID,
            'BIRTH_DATE' => $this->BIRTH_DATE,
            'nextCallDate'=>$this->nextCallDate,
            'CREATED_DT' => $this->CREATED_DT,
            'LAST_UPDATED_DT' => $this->LAST_UPDATED_DT,
            'Budget' => $this->Budget,
            'del' => $this->del,
        ]);

        $query->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'PHONE_NUM', $this->PHONE_NUM])
            ->andFilterWhere(['like','nextCallDate',$this->nextCallDate])
            ->andFilterWhere(['like', 'EMAIL_ADDRESS', $this->EMAIL_ADDRESS])
            ->andFilterWhere(['like', 'PASSWORD', $this->PASSWORD])
            ->andFilterWhere(['like', 'ADDRESS', $this->ADDRESS])
            ->andFilterWhere(['like', 'ZONE', $this->ZONE])
            ->andFilterWhere(['like', 'GENDER', $this->GENDER])
            ->andFilterWhere(['like', 'TrailClass', $this->TrailClass])
            ->andFilterWhere(['like', 'Notes', $this->Notes])
            ->andFilterWhere(['like', 'Source', $this->Source])
            ->andFilterWhere(['like', 'ReqTrainerGender', $this->ReqTrainerGender])
            ->andFilterWhere(['like', 'StartDateTime', $this->StartDateTime])
            ->andFilterWhere(['like', 'EndDateTime', $this->EndDateTime])
            ->andFilterWhere(['like', 'wayToContact', $this->wayToContact])
            ->andFilterWhere(['like', 'leadStatus', $this->leadStatus]);

        return $dataProvider;
    }
}
