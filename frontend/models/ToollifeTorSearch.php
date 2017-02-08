<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ToollifeTor;

/**
 * ToollifeTorSearch represents the model behind the search form about `frontend\models\ToollifeTor`.
 */
class ToollifeTorSearch extends ToollifeTor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtoollife_tor', 'keytool'], 'integer'],
            [['toollife_tor1', 'toollife_tor2', 'toollife_tor3', 'toollife_tor4', 'toollife_tor5', 'toollife_tor6', 'toollife_tor7', 'toollife_tor8', 'toollife_tor9', 'toollife_tor10', 'toollife_tor11', 'toollife_tor12'], 'number'],
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
        $query = ToollifeTor::find();

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
            'idtoollife_tor' => $this->idtoollife_tor,
            'toollife_tor1' => $this->toollife_tor1,
            'toollife_tor2' => $this->toollife_tor2,
            'toollife_tor3' => $this->toollife_tor3,
            'toollife_tor4' => $this->toollife_tor4,
            'toollife_tor5' => $this->toollife_tor5,
            'toollife_tor6' => $this->toollife_tor6,
            'toollife_tor7' => $this->toollife_tor7,
            'toollife_tor8' => $this->toollife_tor8,
            'toollife_tor9' => $this->toollife_tor9,
            'toollife_tor10' => $this->toollife_tor10,
            'toollife_tor11' => $this->toollife_tor11,
            'toollife_tor12' => $this->toollife_tor12,
            'keytool' => $this->keytool,
        ]);

        $query->andFilterWhere(['like', 'idtool_no', $this->idtool_no]);

        return $dataProvider;
    }
}
