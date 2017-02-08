<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "machine".
 *
 * @property integer $idmachine
 * @property string $machine_no
 * @property integer $idlot_detail
 * @property string $lot_scan
 *
 * @property LotDetail $idlotDetail
 * @property ToolA[] $toolAs
 * @property ToolB[] $toolBs
 * @property ToolC[] $toolCs
 */
class Machine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'machine';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['machine_no', 'idlot_detail', 'lot_scan'], 'required'],
            [['idlot_detail'], 'integer'],
            [['machine_no'], 'string', 'max' => 20],
            [['lot_scan'], 'string', 'max' => 15],
            [['idlot_detail', 'lot_scan'], 'exist', 'skipOnError' => true, 'targetClass' => LotDetail::className(), 'targetAttribute' => ['idlot_detail' => 'idlot_detail', 'lot_scan' => 'lot_scan']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idmachine' => 'key machine',
            'machine_no' => 'Machine No',
            'idlot_detail' => 'keylot Detail',
            'lot_scan' => 'Lot Scan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdlotDetail()
    {
        return $this->hasOne(LotDetail::className(), ['idlot_detail' => 'idlot_detail', 'lot_scan' => 'lot_scan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToolAs()
    {
        return $this->hasMany(ToolA::className(), ['idmachine' => 'idmachine', 'machine_no' => 'machine_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToolBs()
    {
        return $this->hasMany(ToolB::className(), ['idmachine' => 'idmachine', 'machine_no' => 'machine_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToolCs()
    {
        return $this->hasMany(ToolC::className(), ['idmachine' => 'idmachine', 'machine_no' => 'machine_no']);
    }
}
