<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Toola;

/**
 * ToolaSearch represents the model behind the search form about `frontend\models\Toola`.
 */
class ToolaSearch extends Toola
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtool_a', 'idmachine'], 'integer'],
            [['tool_a_no', 'tool_a_ch', 'machine_no'], 'safe'],
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
        $query = Toola::find();

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
            'idtool_a' => $this->idtool_a,
            'idmachine' => $this->idmachine,
        ]);

        $query->andFilterWhere(['like', 'tool_a_no', $this->tool_a_no])
            ->andFilterWhere(['like', 'tool_a_ch', $this->tool_a_ch])
            ->andFilterWhere(['like', 'machine_no', $this->machine_no]);

        return $dataProvider;
    }
}
