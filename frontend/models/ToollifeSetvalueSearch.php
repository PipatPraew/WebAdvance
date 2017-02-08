<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ToollifeSetvalue;

/**
 * ToollifeSetvalueSearch represents the model behind the search form about `frontend\models\ToollifeSetvalue`.
 */
class ToollifeSetvalueSearch extends ToollifeSetvalue
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtoollife_setvalue', 'keytool'], 'integer'],
            [['toollife_setvalue1', 'toollife_setvalue2', 'toollife_setvalue3', 'toollife_setvalue4', 'toollife_setvalue5', 'toollife_setvalue6', 'toollife_setvalue7', 'toollife_setvalue8', 'toollife_setvalue9', 'toollife_setvalue10', 'toollife_setvalue11', 'toollife_setvalue12'], 'number'],
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
        $query = ToollifeSetvalue::find();

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
            'idtoollife_setvalue' => $this->idtoollife_setvalue,
            'toollife_setvalue1' => $this->toollife_setvalue1,
            'toollife_setvalue2' => $this->toollife_setvalue2,
            'toollife_setvalue3' => $this->toollife_setvalue3,
            'toollife_setvalue4' => $this->toollife_setvalue4,
            'toollife_setvalue5' => $this->toollife_setvalue5,
            'toollife_setvalue6' => $this->toollife_setvalue6,
            'toollife_setvalue7' => $this->toollife_setvalue7,
            'toollife_setvalue8' => $this->toollife_setvalue8,
            'toollife_setvalue9' => $this->toollife_setvalue9,
            'toollife_setvalue10' => $this->toollife_setvalue10,
            'toollife_setvalue11' => $this->toollife_setvalue11,
            'toollife_setvalue12' => $this->toollife_setvalue12,
            'keytool' => $this->keytool,
        ]);

        $query->andFilterWhere(['like', 'idtool_no', $this->idtool_no]);

        return $dataProvider;
    }
}
