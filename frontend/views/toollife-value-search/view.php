<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeValue */

//$this->title = $model->idtoollife_value;
$this->title = 'Toollife Value';
$this->title = 'Toollife Value';
$this->params['breadcrumbs'][] = ['label' => 'Toollife Value', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toollife-value-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idtoollife_value',
            'toollife_value1',
            'toollife_value2',
            'toollife_value3',
            'toollife_value4',
            'toollife_value5',
            'toollife_value6',
            'toollife_value7',
            'toollife_value8',
            'toollife_value9',
            'toollife_value10',
            'toollife_value11',
            'toollife_value12',
            'keytool',
            'idtool_no',
        ],
    ]) ?>

</div>
