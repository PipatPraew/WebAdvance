<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Machine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="machine-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'machine_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idlot_detail')->textInput() ?>

    <?= $form->field($model, 'lot_scan')->textInput(['maxlength' => true]) ?>



    <?php ActiveForm::end(); ?>

</div>
