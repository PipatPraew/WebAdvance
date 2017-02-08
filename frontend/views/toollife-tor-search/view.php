<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeTor */

$this->title = $model->idtoollife_tor;
$this->params['breadcrumbs'][] = ['label' => 'Toollife Tors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toollife-tor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idtoollife_tor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idtoollife_tor], [
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
            'idtoollife_tor',
            'toollife_tor1',
            'toollife_tor2',
            'toollife_tor3',
            'toollife_tor4',
            'toollife_tor5',
            'toollife_tor6',
            'toollife_tor7',
            'toollife_tor8',
            'toollife_tor9',
            'toollife_tor10',
            'toollife_tor11',
            'toollife_tor12',
            'keytool',
            'idtool_no',
        ],
    ]) ?>

</div>
