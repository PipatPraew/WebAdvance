<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Toola */

$this->title = $model->tool_a_no;

$this->params['breadcrumbs'][] = ['label' => 'Tool A ID', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toola-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idtool_a',
            'tool_a_no',
            'tool_a_ch',
            'idmachine',
            'machine_no',
        ],
    ])
    ?>

</div>
