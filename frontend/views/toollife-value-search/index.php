<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ToollifeValueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Toollife Value';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toollife-value-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Toollife Value', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtoollife_value',
            'toollife_value1',
            'toollife_value2',
            'toollife_value3',
            'toollife_value4',
            // 'toollife_value5',
            // 'toollife_value6',
            // 'toollife_value7',
            // 'toollife_value8',
            // 'toollife_value9',
            // 'toollife_value10',
            // 'toollife_value11',
            // 'toollife_value12',
            // 'keytool',
            // 'idtool_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
