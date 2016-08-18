<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Influence;

/**
 * InfluenceSearch represents the model behind the search form about `app\models\Influence`.
 */
class InfluenceSearch extends Influence
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nilai', 'id_faktor', 'id_stakeholder'], 'integer'],
            [['bobot'], 'number'],
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
        $query = Influence::find();

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
            'nilai' => $this->nilai,
            'bobot' => $this->bobot,
            'id_faktor' => $this->id_faktor,
            'id_stakeholder' => $this->id_stakeholder,
        ]);

        return $dataProvider;
    }
}