<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toollife_value".
 *
 * @property integer $idtoollife_value
 * @property double $toollife_value1
 * @property double $toollife_value2
 * @property double $toollife_value3
 * @property double $toollife_value4
 * @property double $toollife_value5
 * @property double $toollife_value6
 * @property double $toollife_value7
 * @property double $toollife_value8
 * @property double $toollife_value9
 * @property double $toollife_value10
 * @property double $toollife_value11
 * @property double $toollife_value12
 * @property integer $keytool
 * @property string $idtool_no
 */
class ToollifeValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'toollife_value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['toollife_value1', 'toollife_value2', 'toollife_value3', 'toollife_value4', 'toollife_value5', 'toollife_value6', 'toollife_value7', 'toollife_value8', 'toollife_value9', 'toollife_value10', 'toollife_value11', 'toollife_value12'], 'number'],
            [['keytool', 'idtool_no'], 'required'],
            [['keytool'], 'integer'],
            [['idtool_no'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtoollife_value' => 'Idtoollife Value',
            'toollife_value1' => 'Toollife Value1',
            'toollife_value2' => 'Toollife Value2',
            'toollife_value3' => 'Toollife Value3',
            'toollife_value4' => 'Toollife Value4',
            'toollife_value5' => 'Toollife Value5',
            'toollife_value6' => 'Toollife Value6',
            'toollife_value7' => 'Toollife Value7',
            'toollife_value8' => 'Toollife Value8',
            'toollife_value9' => 'Toollife Value9',
            'toollife_value10' => 'Toollife Value10',
            'toollife_value11' => 'Toollife Value11',
            'toollife_value12' => 'Toollife Value12',
            'keytool' => 'key tool',
            'idtool_no' => 'Tool ID No',
        ];
    }
}
