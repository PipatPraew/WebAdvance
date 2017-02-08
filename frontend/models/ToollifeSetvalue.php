<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toollife_setvalue".
 *
 * @property integer $idtoollife_setvalue
 * @property double $toollife_setvalue1
 * @property double $toollife_setvalue2
 * @property double $toollife_setvalue3
 * @property double $toollife_setvalue4
 * @property double $toollife_setvalue5
 * @property double $toollife_setvalue6
 * @property double $toollife_setvalue7
 * @property double $toollife_setvalue8
 * @property double $toollife_setvalue9
 * @property double $toollife_setvalue10
 * @property double $toollife_setvalue11
 * @property double $toollife_setvalue12
 * @property integer $keytool
 * @property string $idtool_no
 */
class ToollifeSetvalue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'toollife_setvalue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['toollife_setvalue1', 'toollife_setvalue2', 'toollife_setvalue3', 'toollife_setvalue4', 'toollife_setvalue5', 'toollife_setvalue6', 'toollife_setvalue7', 'toollife_setvalue8', 'toollife_setvalue9', 'toollife_setvalue10', 'toollife_setvalue11', 'toollife_setvalue12'], 'number'],
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
            'idtoollife_setvalue' => 'Idtoollife Setvalue',
            'toollife_setvalue1' => 'Toollife Setvalue1',
            'toollife_setvalue2' => 'Toollife Setvalue2',
            'toollife_setvalue3' => 'Toollife Setvalue3',
            'toollife_setvalue4' => 'Toollife Setvalue4',
            'toollife_setvalue5' => 'Toollife Setvalue5',
            'toollife_setvalue6' => 'Toollife Setvalue6',
            'toollife_setvalue7' => 'Toollife Setvalue7',
            'toollife_setvalue8' => 'Toollife Setvalue8',
            'toollife_setvalue9' => 'Toollife Setvalue9',
            'toollife_setvalue10' => 'Toollife Setvalue10',
            'toollife_setvalue11' => 'Toollife Setvalue11',
            'toollife_setvalue12' => 'Toollife Setvalue12',
            'keytool' => 'key tool',
            'idtool_no' => 'Tool ID No',
        ];
    }
}
