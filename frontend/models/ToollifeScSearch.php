<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ToollifeSc;

/**
 * ToollifeScSearch represents the model behind the search form about `frontend\models\ToollifeSc`.
 */
class ToollifeScSearch extends ToollifeSc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtoollife_s_c', 'toollife_s_c1', 'toollife_s_c2', 'toollife_s_c3', 'toollife_s_c4', 'toollife_s_c5', 'toollife_s_c6', 'toollife_s_c7', 'toollife_s_c8', 'toollife_s_c9', 'toollife_s_c10', 'toollife_s_c11', 'toollife_s_cc12', 'keytool'], 'integer'],
            [['idtool_no'], 'safe'],
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
        $query = ToollifeSc::find();

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
            'idtoollife_s_c' => $this->idtoollife_s_c,
            'toollife_s_c1' => $this->toollife_s_c1,
            'toollife_s_c2' => $this->toollife_s_c2,
            'toollife_s_c3' => $this->toollife_s_c3,
            'toollife_s_c4' => $this->toollife_s_c4,
            'toollife_s_c5' => $this->toollife_s_c5,
            'toollife_s_c6' => $this->toollife_s_c6,
            'toollife_s_c7' => $this->toollife_s_c7,
            'toollife_s_c8' => $this->toollife_s_c8,
            'toollife_s_c9' => $this->toollife_s_c9,
            'toollife_s_c10' => $this->toollife_s_c10,
            'toollife_s_c11' => $this->toollife_s_c11,
            'toollife_s_cc12' => $this->toollife_s_cc12,
            'keytool' => $this->keytool,
        ]);

        $query->andFilterWhere(['like', 'idtool_no', $this->idtool_no]);

        return $dataProvider;
    }
}
