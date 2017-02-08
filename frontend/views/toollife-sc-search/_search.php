<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeScSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toollife-sc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php// $form->field($model, 'idtoollife_s_c') ?>

    <?php// $form->field($model, 'toollife_s_c1') ?>

    <?php// $form->field($model, 'toollife_s_c2') ?>

    <?php// $form->field($model, 'toollife_s_c3') ?>

    <?php// $form->field($model, 'toollife_s_c4') ?>

    <?php // echo $form->field($model, 'toollife_s_c5') ?>

    <?php // echo $form->field($model, 'toollife_s_c6') ?>

    <?php // echo $form->field($model, 'toollife_s_c7') ?>

    <?php // echo $form->field($model, 'toollife_s_c8') ?>

    <?php // echo $form->field($model, 'toollife_s_c9') ?>

    <?php // echo $form->field($model, 'toollife_s_c10') ?>

    <?php // echo $form->field($model, 'toollife_s_c11') ?>

    <?php // echo $form->field($model, 'toollife_s_cc12') ?>

    <?php echo $form->field($model, 'keytool') ?>

    <?php echo $form->field($model, 'idtool_no') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
