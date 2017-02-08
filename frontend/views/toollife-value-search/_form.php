<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeValue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toollife-value-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'toollife_value1')->textInput() ?>

    <?= $form->field($model, 'toollife_value2')->textInput() ?>

    <?= $form->field($model, 'toollife_value3')->textInput() ?>

    <?= $form->field($model, 'toollife_value4')->textInput() ?>

    <?= $form->field($model, 'toollife_value5')->textInput() ?>

    <?= $form->field($model, 'toollife_value6')->textInput() ?>

    <?= $form->field($model, 'toollife_value7')->textInput() ?>

    <?= $form->field($model, 'toollife_value8')->textInput() ?>

    <?= $form->field($model, 'toollife_value9')->textInput() ?>

    <?= $form->field($model, 'toollife_value10')->textInput() ?>

    <?= $form->field($model, 'toollife_value11')->textInput() ?>

    <?= $form->field($model, 'toollife_value12')->textInput() ?>

    <?= $form->field($model, 'keytool')->textInput() ?>

    <?= $form->field($model, 'idtool_no')->textInput(['maxlength' => true]) ?>

    <?php ActiveForm::end(); ?>

</div>
