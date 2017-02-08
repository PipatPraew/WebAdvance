<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeSetvalueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toollife-setvalue-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php// $form->field($model, 'idtoollife_setvalue') ?>

    <?php// $form->field($model, 'toollife_setvalue1') ?>

    <?php// $form->field($model, 'toollife_setvalue2') ?>

    <?php// $form->field($model, 'toollife_setvalue3') ?>

    <?php// $form->field($model, 'toollife_setvalue4') ?>

    <?php // echo $form->field($model, 'toollife_setvalue5') ?>

    <?php // echo $form->field($model, 'toollife_setvalue6') ?>

    <?php // echo $form->field($model, 'toollife_setvalue7') ?>

    <?php // echo $form->field($model, 'toollife_setvalue8') ?>

    <?php // echo $form->field($model, 'toollife_setvalue9') ?>

    <?php // echo $form->field($model, 'toollife_setvalue10') ?>

    <?php // echo $form->field($model, 'toollife_setvalue11') ?>

    <?php // echo $form->field($model, 'toollife_setvalue12') ?>

    <?php echo $form->field($model, 'keytool') ?>

    <?php echo $form->field($model, 'idtool_no') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
