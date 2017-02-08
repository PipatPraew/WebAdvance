<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Toola */

$this->title = $model->idtool_a;
$this->params['breadcrumbs'][] = ['label' => 'Toolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toola-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idtool_a' => $model->idtool_a, 'tool_a_no' => $model->tool_a_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idtool_a' => $model->idtool_a, 'tool_a_no' => $model->tool_a_no], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idtool_a',
            'tool_a_no',
            'tool_a_ch',
            'idmachine',
            'machine_no',
        ],
    ]) ?>

</div>
