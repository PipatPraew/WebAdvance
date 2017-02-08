<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "toollife_tor".
 *
 * @property integer $idtoollife_tor
 * @property double $toollife_tor1
 * @property double $toollife_tor2
 * @property double $toollife_tor3
 * @property double $toollife_tor4
 * @property double $toollife_tor5
 * @property double $toollife_tor6
 * @property double $toollife_tor7
 * @property double $toollife_tor8
 * @property double $toollife_tor9
 * @property double $toollife_tor10
 * @property double $toollife_tor11
 * @property double $toollife_tor12
 * @property integer $keytool
 * @property string $idtool_no
 */
class ToollifeTor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'toollife_tor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['toollife_tor1', 'toollife_tor2', 'toollife_tor3', 'toollife_tor4', 'toollife_tor5', 'toollife_tor6', 'toollife_tor7', 'toollife_tor8', 'toollife_tor9', 'toollife_tor10', 'toollife_tor11', 'toollife_tor12'], 'number'],
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
            'idtoollife_tor' => 'Idtoollife Tor',
            'toollife_tor1' => 'Toollife Tor1',
            'toollife_tor2' => 'Toollife Tor2',
            'toollife_tor3' => 'Toollife Tor3',
            'toollife_tor4' => 'Toollife Tor4',
            'toollife_tor5' => 'Toollife Tor5',
            'toollife_tor6' => 'Toollife Tor6',
            'toollife_tor7' => 'Toollife Tor7',
            'toollife_tor8' => 'Toollife Tor8',
            'toollife_tor9' => 'Toollife Tor9',
            'toollife_tor10' => 'Toollife Tor10',
            'toollife_tor11' => 'Toollife Tor11',
            'toollife_tor12' => 'Toollife Tor12',
            'keytool' => 'key tool',
            'idtool_no' => 'Tool ID No',
        ];
    }
}
