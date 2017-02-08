<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Lotdetail;

/**
 * LotdetailSearch represents the model behind the search form about `frontend\models\Lotdetail`.
 */
class LotdetailSearch extends Lotdetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idlot_detail'], 'integer'],
            [['lot_scan', 'massage1', 'massage2', 'lot_no', 'pkg_code', 'lead_type', 'frame_stock', 'wip_operation', 'lot_status', 'mc_wip', 'time_start', 'time_stop', 'time_stamp'], 'safe'],
            [['unit_qty', 'strip_qty'], 'number'],
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
        $query = Lotdetail::find();

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
            'idlot_detail' => $this->idlot_detail,
            'unit_qty' => $this->unit_qty,
            'strip_qty' => $this->strip_qty,
            'time_stamp' => $this->time_stamp,
        ]);

        $query->andFilterWhere(['like', 'lot_scan', $this->lot_scan])
            ->andFilterWhere(['like', 'massage1', $this->massage1])
            ->andFilterWhere(['like', 'massage2', $this->massage2])
            ->andFilterWhere(['like', 'lot_no', $this->lot_no])
            ->andFilterWhere(['like', 'pkg_code', $this->pkg_code])
            ->andFilterWhere(['like', 'lead_type', $this->lead_type])
            ->andFilterWhere(['like', 'frame_stock', $this->frame_stock])
            ->andFilterWhere(['like', 'wip_operation', $this->wip_operation])
            ->andFilterWhere(['like', 'lot_status', $this->lot_status])
            ->andFilterWhere(['like', 'mc_wip', $this->mc_wip])
            ->andFilterWhere(['like', 'time_start', $this->time_start])
            ->andFilterWhere(['like', 'time_stop', $this->time_stop]);

        return $dataProvider;
    }
}
