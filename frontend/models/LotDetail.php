<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lot_detail".
 *
 * @property integer $idlot_detail
 * @property string $lot_scan
 * @property string $massage1
 * @property string $massage2
 * @property string $lot_no
 * @property string $pkg_code
 * @property string $lead_type
 * @property string $frame_stock
 * @property double $unit_qty
 * @property double $strip_qty
 * @property string $wip_operation
 * @property string $lot_status
 * @property string $mc_wip
 * @property string $time_start
 * @property string $time_stop
 * @property string $time_stamp
 *
 * @property Machine[] $machines
 */
class LotDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lot_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lot_scan'], 'required'],
            [['unit_qty', 'strip_qty'], 'number'],
            [['time_stamp'], 'safe'],
            [['lot_scan', 'lot_no', 'frame_stock'], 'string', 'max' => 15],
            [['massage1', 'massage2'], 'string', 'max' => 50],
            [['pkg_code', 'lead_type', 'wip_operation', 'lot_status', 'mc_wip'], 'string', 'max' => 20],
            [['time_start', 'time_stop'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idlot_detail' => 'keylot Detail',
            'lot_scan' => 'Lot Scan',
            'massage1' => 'Massage1',
            'massage2' => 'Massage2',
            'lot_no' => 'Lot No',
            'pkg_code' => 'Pkg Code',
            'lead_type' => 'Lead Type',
            'frame_stock' => 'Frame Stock',
            'unit_qty' => 'Unit Qty',
            'strip_qty' => 'Strip Qty',
            'wip_operation' => 'Wip Operation',
            'lot_status' => 'Lot Status',
            'mc_wip' => 'Mc Wip',
            'time_start' => 'Time Start',
            'time_stop' => 'Time Stop',
            'time_stamp' => 'Time Stamp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMachines()
    {
        return $this->hasMany(Machine::className(), ['idlot_detail' => 'idlot_detail', 'lot_scan' => 'lot_scan']);
    }
}
