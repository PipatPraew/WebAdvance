<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ToollifeSetvalueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Table Toollife Set value';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toollife-setvalue-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php// Html::a('Create Toollife Setvalue', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtoollife_setvalue',
            'toollife_setvalue1',
            'toollife_setvalue2',
            'toollife_setvalue3',
            'toollife_setvalue4',
            'toollife_setvalue5',
            'toollife_setvalue6',
            'toollife_setvalue7',
            'toollife_setvalue8',
            'toollife_setvalue9',
            'toollife_setvalue10',
            'toollife_setvalue11',
            'toollife_setvalue12',
            'keytool',
            'idtool_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
