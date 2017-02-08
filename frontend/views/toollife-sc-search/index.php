<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ToollifeScSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Table Toollife PC';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toollife-sc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php// Html::a('Create Toollife Sc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idtoollife_s_c',
            'toollife_s_c1',
            'toollife_s_c2',
            'toollife_s_c3',
            'toollife_s_c4',
            'toollife_s_c5',
            'toollife_s_c6',
            'toollife_s_c7',
            'toollife_s_c8',
            'toollife_s_c9',
            'toollife_s_c10',
            'toollife_s_c11',
            'toollife_s_cc12',
            'keytool',
            'idtool_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
