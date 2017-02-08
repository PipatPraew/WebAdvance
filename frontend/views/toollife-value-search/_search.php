<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeValueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toollife-value-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php// $form->field($model, 'idtoollife_value') ?>

    <?php// $form->field($model, 'toollife_value1') ?>

    <?php// $form->field($model, 'toollife_value2') ?>

    <?php// $form->field($model, 'toollife_value3') ?>

    <?php// $form->field($model, 'toollife_value4') ?>

    <?php // echo $form->field($model, 'toollife_value5') ?>

    <?php // echo $form->field($model, 'toollife_value6') ?>

    <?php // echo $form->field($model, 'toollife_value7') ?>

    <?php // echo $form->field($model, 'toollife_value8') ?>

    <?php // echo $form->field($model, 'toollife_value9') ?>

    <?php // echo $form->field($model, 'toollife_value10') ?>

    <?php // echo $form->field($model, 'toollife_value11') ?>

    <?php // echo $form->field($model, 'toollife_value12') ?>

    <?php echo $form->field($model, 'keytool') ?>

    <?php echo $form->field($model, 'idtool_no') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
