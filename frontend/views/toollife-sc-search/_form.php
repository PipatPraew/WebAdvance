<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeSc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toollife-sc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'toollife_s_c1')->textInput() ?>

    <?= $form->field($model, 'toollife_s_c2')->textInput() ?>

    <?= $form->field($model, 'toollife_s_c3')->textInput() ?>

    <?= $form->field($model, 'toollife_s_c4')->textInput() ?>

    <?= $form->field($model, 'toollife_s_c5')->textInput() ?>

    <?= $form->field($model, 'toollife_s_c6')->textInput() ?>

    <?= $form->field($model, 'toollife_s_c7')->textInput() ?>

    <?= $form->field($model, 'toollife_s_c8')->textInput() ?>

    <?= $form->field($model, 'toollife_s_c9')->textInput() ?>

    <?= $form->field($model, 'toollife_s_c10')->textInput() ?>

    <?= $form->field($model, 'toollife_s_c11')->textInput() ?>

    <?= $form->field($model, 'toollife_s_cc12')->textInput() ?>

    <?= $form->field($model, 'keytool')->textInput() ?>

    <?= $form->field($model, 'idtool_no')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
