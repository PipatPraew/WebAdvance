<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToolbSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toolb-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php// $form->field($model, 'idtool_b') ?>

    <?pgp// $form->field($model, 'tool_b_no') ?>

    <?php// $form->field($model, 'tool_b_ch') ?>

    <?= $form->field($model, 'idmachine') ?>

    <?= $form->field($model, 'machine_no') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
