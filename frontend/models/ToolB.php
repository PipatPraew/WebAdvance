<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tool_b".
 *
 * @property integer $idtool_b
 * @property string $tool_b_no
 * @property string $tool_b_ch
 * @property integer $idmachine
 * @property string $machine_no
 *
 * @property Machine $idmachine0
 */
class ToolB extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tool_b';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tool_b_no'], 'required'],
            [['idmachine'], 'integer'],
            [['tool_b_no', 'tool_b_ch'], 'string', 'max' => 45],
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
            'idtool_b' => 'key tool B',
            'tool_b_no' => 'Tool B No',
            'tool_b_ch' => 'Tool B Ch',
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
