<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeSetvalue */

//$this->title = $model->idtoollife_setvalue;
$this->title = 'Toollife Set value';
$this->params['breadcrumbs'][] = ['label' => 'Toollife Set value', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toollife-setvalue-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idtoollife_setvalue',
            'toollife_setvalue1',
            'toollife_setvalue2',
            'toollife_setvalue3',
            'toollife_setvalue4',
            'toollife_setvalue5',
            'toollife_setvalue6',
            'toollife_setvalue7',
            'toollife_setvalue8',
            'toollife_setvalue9',
            'toollife_setvalue10',
            'toollife_setvalue11',
            'toollife_setvalue12',
            'keytool',
            'idtool_no',
        ],
    ]) ?>

</div>
