<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeTorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toollife-tor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php// $form->field($model, 'idtoollife_tor') ?>

    <?php// $form->field($model, 'toollife_tor1') ?>

    <?php// $form->field($model, 'toollife_tor2') ?>

    <?php// $form->field($model, 'toollife_tor3') ?>

    <?php// $form->field($model, 'toollife_tor4') ?>

    <?php // echo $form->field($model, 'toollife_tor5') ?>

    <?php // echo $form->field($model, 'toollife_tor6') ?>

    <?php // echo $form->field($model, 'toollife_tor7') ?>

    <?php // echo $form->field($model, 'toollife_tor8') ?>

    <?php // echo $form->field($model, 'toollife_tor9') ?>

    <?php // echo $form->field($model, 'toollife_tor10') ?>

    <?php // echo $form->field($model, 'toollife_tor11') ?>

    <?php // echo $form->field($model, 'toollife_tor12') ?>

    <?php echo $form->field($model, 'keytool') ?>

    <?php echo $form->field($model, 'idtool_no') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
