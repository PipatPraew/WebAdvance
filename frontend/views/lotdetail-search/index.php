<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LotdetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Table Lot details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lotdetail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php// Html::a('Create Lotdetail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idlot_detail',
            'lot_scan',
            'massage1',
            'massage2',
            'lot_no',
            'pkg_code',
            'lead_type',
            'frame_stock',
            'unit_qty',
            'strip_qty',
            'wip_operation',
            'lot_status',
            'mc_wip',
            'time_start',
            'time_stop',
            'time_stamp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
