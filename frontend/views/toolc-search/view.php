<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Toolc */

$this->title = $model->idtool_c;
$this->params['breadcrumbs'][] = ['label' => 'Toolcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toolc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idtool_c' => $model->idtool_c, 'tool_c_no' => $model->tool_c_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idtool_c' => $model->idtool_c, 'tool_c_no' => $model->tool_c_no], [
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
            'idtool_c',
            'tool_c_no',
            'tool_c_ch',
            'idmachine',
            'machine_no',
        ],
    ]) ?>

</div>
