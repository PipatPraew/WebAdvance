<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Machine;

/**
 * MachineSearch represents the model behind the search form about `frontend\models\Machine`.
 */
class MachineSearch extends Machine
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idmachine', 'idlot_detail'], 'integer'],
            [['machine_no', 'lot_scan'], 'safe'],
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
        $query = Machine::find();

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
            'idmachine' => $this->idmachine,
            'idlot_detail' => $this->idlot_detail,
        ]);

        $query->andFilterWhere(['like', 'machine_no', $this->machine_no])
            ->andFilterWhere(['like', 'lot_scan', $this->lot_scan]);

        return $dataProvider;
    }
}
