<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Toolc */

$this->title = 'Update Toolc: ' . $model->idtool_c;
$this->params['breadcrumbs'][] = ['label' => 'Toolcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtool_c, 'url' => ['view', 'idtool_c' => $model->idtool_c, 'tool_c_no' => $model->tool_c_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toolc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
