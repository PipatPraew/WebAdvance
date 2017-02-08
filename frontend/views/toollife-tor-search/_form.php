<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeTor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toollife-tor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'toollife_tor1')->textInput() ?>

    <?= $form->field($model, 'toollife_tor2')->textInput() ?>

    <?= $form->field($model, 'toollife_tor3')->textInput() ?>

    <?= $form->field($model, 'toollife_tor4')->textInput() ?>

    <?= $form->field($model, 'toollife_tor5')->textInput() ?>

    <?= $form->field($model, 'toollife_tor6')->textInput() ?>

    <?= $form->field($model, 'toollife_tor7')->textInput() ?>

    <?= $form->field($model, 'toollife_tor8')->textInput() ?>

    <?= $form->field($model, 'toollife_tor9')->textInput() ?>

    <?= $form->field($model, 'toollife_tor10')->textInput() ?>

    <?= $form->field($model, 'toollife_tor11')->textInput() ?>

    <?= $form->field($model, 'toollife_tor12')->textInput() ?>

    <?= $form->field($model, 'keytool')->textInput() ?>

    <?= $form->field($model, 'idtool_no')->textInput(['maxlength' => true]) ?>

    <?php ActiveForm::end(); ?>

</div>
