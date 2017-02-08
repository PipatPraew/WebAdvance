<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Toola */

$this->title = 'Update Toola: ' . $model->idtool_a;
$this->params['breadcrumbs'][] = ['label' => 'Toolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtool_a, 'url' => ['view', 'idtool_a' => $model->idtool_a, 'tool_a_no' => $model->tool_a_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toola-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
