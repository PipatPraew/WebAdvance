<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ToollifeTorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Table Toollife Tolerance';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toollife-tor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php// Html::a('Create Toollife Tor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idtoollife_tor',
            'toollife_tor1',
            'toollife_tor2',
            'toollife_tor3',
            'toollife_tor4',
            'toollife_tor5',
            'toollife_tor6',
            'toollife_tor7',
            'toollife_tor8',
            'toollife_tor9',
            'toollife_tor10',
            'toollife_tor11',
            'toollife_tor12',
            'keytool',
            'idtool_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
