<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Toolb */

$this->title = 'Update Toolb: ' . $model->idtool_b;
$this->params['breadcrumbs'][] = ['label' => 'Toolbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtool_b, 'url' => ['view', 'idtool_b' => $model->idtool_b, 'tool_b_no' => $model->tool_b_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toolb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
