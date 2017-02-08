<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Lotdetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lotdetail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lot_scan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'massage1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'massage2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lot_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pkg_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lead_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frame_stock')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_qty')->textInput() ?>

    <?= $form->field($model, 'strip_qty')->textInput() ?>

    <?= $form->field($model, 'wip_operation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lot_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mc_wip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_start')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_stop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_stamp')->textInput() ?>

    <?php ActiveForm::end(); ?>

</div>
