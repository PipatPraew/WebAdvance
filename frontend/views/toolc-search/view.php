<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Toolc */

$this->title = $model->tool_c_no;
$this->params['breadcrumbs'][] = ['label' => 'Tool C ID', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toolc-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
