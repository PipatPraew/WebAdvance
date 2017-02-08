<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Toolc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toolc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tool_c_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tool_c_ch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idmachine')->textInput() ?>

    <?= $form->field($model, 'machine_no')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
