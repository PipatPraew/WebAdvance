<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Toolb */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toolb-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tool_b_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tool_b_ch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idmachine')->textInput() ?>

    <?= $form->field($model, 'machine_no')->textInput(['maxlength' => true]) ?>

    <?php ActiveForm::end(); ?>

</div>
