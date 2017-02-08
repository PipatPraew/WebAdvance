<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Toolb */

$this->title = $model->idtool_b;
$this->params['breadcrumbs'][] = ['label' => 'Toolbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toolb-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idtool_b' => $model->idtool_b, 'tool_b_no' => $model->tool_b_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idtool_b' => $model->idtool_b, 'tool_b_no' => $model->tool_b_no], [
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
            'idtool_b',
            'tool_b_no',
            'tool_b_ch',
            'idmachine',
            'machine_no',
        ],
    ]) ?>

</div>
