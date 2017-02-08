<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tool_c".
 *
 * @property integer $idtool_c
 * @property string $tool_c_no
 * @property string $tool_c_ch
 * @property integer $idmachine
 * @property string $machine_no
 *
 * @property Machine $idmachine0
 */
class ToolC extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tool_c';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tool_c_no'], 'required'],
            [['idmachine'], 'integer'],
            [['tool_c_no', 'tool_c_ch'], 'string', 'max' => 45],
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
            'idtool_c' => 'key tool C',
            'tool_c_no' => 'Tool C No',
            'tool_c_ch' => 'Tool C Ch',
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
