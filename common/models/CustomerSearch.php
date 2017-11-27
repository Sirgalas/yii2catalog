<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Customer;

/**
 * CustomerSearch represents the model behind the search form about `common\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'home', 'apartment', 'id_parent_family', 'type_family_member', 'type_child', 'family_income', 'accompanying', 'info_family', 'user_id', 'customer_doc'], 'integer'],
            [['name', 'last_name', 'family_name', 'date_of_birth', 'town', 'street', 'created_at', 'deleted_at', 'phone', 'char_of_housing', 'snils', 'work', 'out_shcool'], 'safe'],
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
        $query = Customer::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date_of_birth' => $this->date_of_birth,
            'home' => $this->home,
            'apartment' => $this->apartment,
            'created_at' => $this->created_at,
            'deleted_at' => $this->deleted_at,
            'id_parent_family' => $this->id_parent_family,
            'type_family_member' => $this->type_family_member,
            'type_child' => $this->type_child,
            'family_income' => $this->family_income,
            'accompanying' => $this->accompanying,
            'info_family' => $this->info_family,
            'user_id' => $this->user_id,
            'customer_doc' => $this->customer_doc,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'family_name', $this->family_name])
            ->andFilterWhere(['like', 'town', $this->town])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'char_of_housing', $this->char_of_housing])
            ->andFilterWhere(['like', 'snils', $this->snils])
            ->andFilterWhere(['like', 'work', $this->work])
            ->andFilterWhere(['like', 'out_shcool', $this->out_shcool]);

        return $dataProvider;
    }
}
