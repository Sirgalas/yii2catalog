<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Services;

/**
 * ServicesSearch represents the model behind the search form about `common\models\Services`.
 */
class ServicesSearch extends Services
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_customer', 'id_type_services', 'id_user_responsible', 'id_user_spec', 'type_user'], 'integer'],
            [['content', 'result', 'created_at', 'type_services'], 'safe'],
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
        $query = Services::find();

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
            'id_customer' => $this->id_customer,
            'id_type_services' => $this->id_type_services,
            'id_user_responsible' => $this->id_user_responsible,
            'id_user_spec' => $this->id_user_spec,
            'created_at' => $this->created_at,
            'type_user' => $this->type_user,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'result', $this->result])
            ->andFilterWhere(['like', 'type_services', $this->type_services]);

        return $dataProvider;
    }
}
