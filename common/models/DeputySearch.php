<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Deputy;

/**
 * DeputySearch represents the model behind the search form about `common\models\Deputy`.
 */
class DeputySearch extends Deputy
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_deputy', 'id_user'], 'integer'],
            [['created_at', 'update_at'], 'safe'],
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
        $query = Deputy::find();

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
            'id_deputy' => $this->id_deputy,
            'id_user' => $this->id_user,
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
        ]);

        return $dataProvider;
    }
}
