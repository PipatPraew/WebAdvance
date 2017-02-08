<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Lotdetail */

$this->title = 'Update Lotdetail: ' . $model->idlot_detail;
$this->params['breadcrumbs'][] = ['label' => 'Lotdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idlot_detail, 'url' => ['view', 'idlot_detail' => $model->idlot_detail, 'lot_scan' => $model->lot_scan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lotdetail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
