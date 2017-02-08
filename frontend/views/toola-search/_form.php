<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Toola */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toola-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tool_a_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tool_a_ch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idmachine')->textInput() ?>

    <?= $form->field($model, 'machine_no')->textInput(['maxlength' => true]) ?>

    <?php ActiveForm::end(); ?>

</div>
