<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tool_a".
 *
 * @property integer $idtool_a
 * @property string $tool_a_no
 * @property string $tool_a_ch
 * @property integer $idmachine
 * @property string $machine_no
 *
 * @property Machine $idmachine0
 */
class ToolA extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tool_a';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tool_a_no'], 'required'],
            [['idmachine'], 'integer'],
            [['tool_a_no', 'tool_a_ch'], 'string', 'max' => 45],
            [['machine_no'], 'string', 'max' => 20],
            [['idmachine', 'machine_no'], 'exist', 'skipOnError' => true, 'targetClass' => Machine::className(), 'targetAttribute' => ['idmachine' => 'idmachine', 'machine_no' => 'machine_no']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtool_a' => 'key tool A',
            'tool_a_no' => 'Tool A ID No',
            'tool_a_ch' => 'Tool A Character',
            'idmachine' => 'key machine',
            'machine_no' => 'Machine No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdmachine0()
    {
        return $this->hasOne(Machine::className(), ['idmachine' => 'idmachine', 'machine_no' => 'machine_no']);
    }
}
