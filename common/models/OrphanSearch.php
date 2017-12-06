<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Orphan;

/**
 * OrphanSearch represents the model behind the search form about `common\models\Orphan`.
 */
class OrphanSearch extends Orphan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'home', 'availability', 'check_in', 'housing_account', 'working','id_customer',], 'integer'],
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
        $query = Orphan::find();

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
            'home' => $this->home,
            'availability' => $this->availability,
            'check_in' => $this->check_in,
            'housing_account' => $this->housing_account,
            'working' => $this->working,
            'id_customer'=>$this->id_customer,
        ]);

        return $dataProvider;
    }
}
