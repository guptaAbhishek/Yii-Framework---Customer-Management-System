<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Provider;

/**
 * ProviderSearch represents the model behind the search form about `app\models\Provider`.
 */
class ProviderSearch extends Provider
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PROVIDER_ID', 'TrainerBlackList', 'delete'], 'integer'],
            [['NAME', 'EMAIL_ADDRESS', 'PrimaryPhoneNum', 'SecondaryPhoneNum', 'ProviderIdProof', 'PASSWORD', 'BIRTH_DATE', 'ADDRESS', 'City', 'GENDER', 'ExperienceYear', 'ExperienceMonths', 'CREATED_DT', 'LAST_UPDATED_DT', 'ReferredBy', 'PreferredLocation', 'YogaStyle', 'AboutTrainer', 'NotesByTrainer', 'NextCallDate'], 'safe'],
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

    /***
    * Matching Provider For Consumer 
    * Address and Gender 
    * 
    */

    public function match($params){
        $query = Provider::find();

        $dataProvider = new ActiveDataProvider([
                'query'=>$query,
            ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like','ADDRESS',$this->ADDRESS]);

        return $dataProvider;
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
        $query = Provider::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->orderBy(['PROVIDER_ID'=>SORT_DESC]);

        $query->andFilterWhere([
            'PROVIDER_ID' => $this->PROVIDER_ID,
            'BIRTH_DATE' => $this->BIRTH_DATE,
            'CREATED_DT' => $this->CREATED_DT,
            'LAST_UPDATED_DT' => $this->LAST_UPDATED_DT,
            'TrainerBlackList' => $this->TrainerBlackList,
            'delete' => $this->delete,
            'NextCallDate' => $this->NextCallDate,
        ]);

        $query->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'EMAIL_ADDRESS', $this->EMAIL_ADDRESS])
            ->andFilterWhere(['like', 'PrimaryPhoneNum', $this->PrimaryPhoneNum])
            ->andFilterWhere(['like', 'SecondaryPhoneNum', $this->SecondaryPhoneNum])
            ->andFilterWhere(['like', 'ProviderIdProof', $this->ProviderIdProof])
            ->andFilterWhere(['like', 'PASSWORD', $this->PASSWORD])
            ->andFilterWhere(['like', 'ADDRESS', $this->ADDRESS])
            ->andFilterWhere(['like', 'City', $this->City])
            ->andFilterWhere(['like', 'GENDER', $this->GENDER])
            ->andFilterWhere(['like', 'ExperienceYear', $this->ExperienceYear])
            ->andFilterWhere(['like', 'ExperienceMonths', $this->ExperienceMonths])
            ->andFilterWhere(['like', 'ReferredBy', $this->ReferredBy])
            ->andFilterWhere(['like', 'PreferredLocation', $this->PreferredLocation])
            ->andFilterWhere(['like', 'YogaStyle', $this->YogaStyle])
            ->andFilterWhere(['like', 'AboutTrainer', $this->AboutTrainer])
            ->andFilterWhere(['like', 'NotesByTrainer', $this->NotesByTrainer]);

        return $dataProvider;
    }
}
