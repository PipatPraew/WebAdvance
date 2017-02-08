<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MachineSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="machine-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php// $form->field($model, 'idmachine') ?>

    <?php// $form->field($model, 'machine_no') ?>

    <?= $form->field($model, 'idlot_detail') ?>

    <?= $form->field($model, 'lot_scan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
