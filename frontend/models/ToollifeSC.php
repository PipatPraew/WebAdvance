<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toollife_s_c".
 *
 * @property integer $idtoollife_s_c
 * @property integer $toollife_s_c1
 * @property integer $toollife_s_c2
 * @property integer $toollife_s_c3
 * @property integer $toollife_s_c4
 * @property integer $toollife_s_c5
 * @property integer $toollife_s_c6
 * @property integer $toollife_s_c7
 * @property integer $toollife_s_c8
 * @property integer $toollife_s_c9
 * @property integer $toollife_s_c10
 * @property integer $toollife_s_c11
 * @property integer $toollife_s_cc12
 * @property integer $keytool
 * @property string $idtool_no
 */
class ToollifeSC extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'toollife_s_c';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['toollife_s_c1', 'toollife_s_c2', 'toollife_s_c3', 'toollife_s_c4', 'toollife_s_c5', 'toollife_s_c6', 'toollife_s_c7', 'toollife_s_c8', 'toollife_s_c9', 'toollife_s_c10', 'toollife_s_c11', 'toollife_s_cc12', 'keytool'], 'integer'],
            [['keytool', 'idtool_no'], 'required'],
            [['idtool_no'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtoollife_s_c' => 'Idtoollife PC',
            'toollife_s_c1' => 'Toollife PC1',
            'toollife_s_c2' => 'Toollife PC2',
            'toollife_s_c3' => 'Toollife PC3',
            'toollife_s_c4' => 'Toollife PC4',
            'toollife_s_c5' => 'Toollife PC5',
            'toollife_s_c6' => 'Toollife PC6',
            'toollife_s_c7' => 'Toollife PC7',
            'toollife_s_c8' => 'Toollife PC8',
            'toollife_s_c9' => 'Toollife PC9',
            'toollife_s_c10' => 'Toollife PC10',
            'toollife_s_c11' => 'Toollife PC11',
            'toollife_s_cc12' => 'Toollife PC12',
            'keytool' => 'key tool',
            'idtool_no' => 'Tool ID No',
        ];
    }
}
