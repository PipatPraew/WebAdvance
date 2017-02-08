<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Machine */

$this->title = 'Update Machine: ' . $model->idmachine;
$this->params['breadcrumbs'][] = ['label' => 'Machines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmachine, 'url' => ['view', 'idmachine' => $model->idmachine, 'machine_no' => $model->machine_no, 'idlot_detail' => $model->idlot_detail, 'lot_scan' => $model->lot_scan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="machine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
