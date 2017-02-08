<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Lotdetail */

$this->title = $model->lot_no;
$this->params['breadcrumbs'][] = ['label' => 'Lotdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lotdetail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>
