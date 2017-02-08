<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Toolb;

/**
 * ToolbSearch represents the model behind the search form about `frontend\models\Toolb`.
 */
class ToolbSearch extends Toolb
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtool_b', 'idmachine'], 'integer'],
            [['tool_b_no', 'tool_b_ch', 'machine_no'], 'safe'],
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
        $query = Toolb::find();

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
            'idtool_b' => $this->idtool_b,
            'idmachine' => $this->idmachine,
        ]);

        $query->andFilterWhere(['like', 'tool_b_no', $this->tool_b_no])
            ->andFilterWhere(['like', 'tool_b_ch', $this->tool_b_ch])
            ->andFilterWhere(['like', 'machine_no', $this->machine_no]);

        return $dataProvider;
    }
}
