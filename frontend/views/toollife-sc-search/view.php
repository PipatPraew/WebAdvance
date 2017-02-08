<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeSc */
//$this->title = $model->idtoollife_s_c;
$this->title = 'P.C';
$this->params['breadcrumbs'][] = ['label' => 'Toollife PC', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toollife-sc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idtoollife_s_c',
            'toollife_s_c1',
            'toollife_s_c2',
            'toollife_s_c3',
            'toollife_s_c4',
            'toollife_s_c5',
            'toollife_s_c6',
            'toollife_s_c7',
            'toollife_s_c8',
            'toollife_s_c9',
            'toollife_s_c10',
            'toollife_s_c11',
            'toollife_s_cc12',
            'keytool',
            'idtool_no',
        ],
    ]) ?>

</div>
