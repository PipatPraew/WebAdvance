<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeSetvalue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toollife-setvalue-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'toollife_setvalue1')->textInput() ?>

    <?= $form->field($model, 'toollife_setvalue2')->textInput() ?>

    <?= $form->field($model, 'toollife_setvalue3')->textInput() ?>

    <?= $form->field($model, 'toollife_setvalue4')->textInput() ?>

    <?= $form->field($model, 'toollife_setvalue5')->textInput() ?>

    <?= $form->field($model, 'toollife_setvalue6')->textInput() ?>

    <?= $form->field($model, 'toollife_setvalue7')->textInput() ?>

    <?= $form->field($model, 'toollife_setvalue8')->textInput() ?>

    <?= $form->field($model, 'toollife_setvalue9')->textInput() ?>

    <?= $form->field($model, 'toollife_setvalue10')->textInput() ?>

    <?= $form->field($model, 'toollife_setvalue11')->textInput() ?>

    <?= $form->field($model, 'toollife_setvalue12')->textInput() ?>

    <?= $form->field($model, 'keytool')->textInput() ?>

    <?= $form->field($model, 'idtool_no')->textInput(['maxlength' => true]) ?>

    <?php ActiveForm::end(); ?>

</div>
