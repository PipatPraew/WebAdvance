<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeValue */

$this->title = $model->idtoollife_value;
$this->params['breadcrumbs'][] = ['label' => 'Toollife Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toollife-value-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idtoollife_value], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idtoollife_value], [
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
            'idtoollife_value',
            'toollife_value1',
            'toollife_value2',
            'toollife_value3',
            'toollife_value4',
            'toollife_value5',
            'toollife_value6',
            'toollife_value7',
            'toollife_value8',
            'toollife_value9',
            'toollife_value10',
            'toollife_value11',
            'toollife_value12',
            'keytool',
            'idtool_no',
        ],
    ]) ?>

</div>
