<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\LotdetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lotdetail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php// $form->field($model, 'idlot_detail') ?>

    <?php// $form->field($model, 'lot_scan') ?>

    <?php// $form->field($model, 'massage1') ?>

    <?php// $form->field($model, 'massage2') ?>

    <?= $form->field($model, 'lot_no') ?>

    <?php // echo $form->field($model, 'pkg_code') ?>

    <?php // echo $form->field($model, 'lead_type') ?>

    <?php // echo $form->field($model, 'frame_stock') ?>

    <?php // echo $form->field($model, 'unit_qty') ?>

    <?php // echo $form->field($model, 'strip_qty') ?>

    <?php // echo $form->field($model, 'wip_operation') ?>

    <?php // echo $form->field($model, 'lot_status') ?>

    <?php // echo $form->field($model, 'mc_wip') ?>

    <?php // echo $form->field($model, 'time_start') ?>

    <?php // echo $form->field($model, 'time_stop') ?>

    <?php // echo $form->field($model, 'time_stamp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
