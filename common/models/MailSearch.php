<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mail;

/**
 * MailSearch represents the model behind the search form about `common\models\Mail`.
 */
class MailSearch extends Mail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'customer_id', 'user_id'], 'integer'],
            [['authority', 'in_date', 'out_date', 'in_info', 'out_info'], 'safe'],
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
        $query = Mail::find();

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
            'in_date' => $this->in_date,
            'out_date' => $this->out_date,
            'customer_id' => $this->customer_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'authority', $this->authority])
            ->andFilterWhere(['like', 'in_info', $this->in_info])
            ->andFilterWhere(['like', 'out_info', $this->out_info]);

        return $dataProvider;
    }
}
