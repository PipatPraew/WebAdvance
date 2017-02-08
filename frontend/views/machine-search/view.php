<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Machine */

$this->title = $model->idmachine;
$this->params['breadcrumbs'][] = ['label' => 'Machines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="machine-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idmachine' => $model->idmachine, 'machine_no' => $model->machine_no, 'idlot_detail' => $model->idlot_detail, 'lot_scan' => $model->lot_scan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idmachine' => $model->idmachine, 'machine_no' => $model->machine_no, 'idlot_detail' => $model->idlot_detail, 'lot_scan' => $model->lot_scan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idmachine',
            'machine_no',
            'idlot_detail',
            'lot_scan',
        ],
    ]) ?>

</div>
