<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Toolb */

$this->title = $model->tool_b_no;
$this->params['breadcrumbs'][] = ['label' => 'Tool B ID', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toolb-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
