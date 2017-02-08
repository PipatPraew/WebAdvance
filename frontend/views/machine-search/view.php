<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Machine */

$this->title = $model->machine_no;
$this->params['breadcrumbs'][] = ['label' => 'Machines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="machine-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idmachine',
            'machine_no',
            'idlot_detail',
            'lot_scan',
        ],
    ]) ?>

</div>
