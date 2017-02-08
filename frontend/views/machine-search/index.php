<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MachineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Table Machines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="machine-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php// Html::a('Create Machine', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idmachine',
            'machine_no',
            'idlot_detail',
            'lot_scan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
