<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ToollifeValue;

/**
 * ToollifeValueSearch represents the model behind the search form about `frontend\models\ToollifeValue`.
 */
class ToollifeValueSearch extends ToollifeValue
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtoollife_value', 'keytool'], 'integer'],
            [['toollife_value1', 'toollife_value2', 'toollife_value3', 'toollife_value4', 'toollife_value5', 'toollife_value6', 'toollife_value7', 'toollife_value8', 'toollife_value9', 'toollife_value10', 'toollife_value11', 'toollife_value12'], 'number'],
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
        $query = ToollifeValue::find();

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
            'idtoollife_value' => $this->idtoollife_value,
            'toollife_value1' => $this->toollife_value1,
            'toollife_value2' => $this->toollife_value2,
            'toollife_value3' => $this->toollife_value3,
            'toollife_value4' => $this->toollife_value4,
            'toollife_value5' => $this->toollife_value5,
            'toollife_value6' => $this->toollife_value6,
            'toollife_value7' => $this->toollife_value7,
            'toollife_value8' => $this->toollife_value8,
            'toollife_value9' => $this->toollife_value9,
            'toollife_value10' => $this->toollife_value10,
            'toollife_value11' => $this->toollife_value11,
            'toollife_value12' => $this->toollife_value12,
            'keytool' => $this->keytool,
        ]);

        $query->andFilterWhere(['like', 'idtool_no', $this->idtool_no]);

        return $dataProvider;
    }
}
