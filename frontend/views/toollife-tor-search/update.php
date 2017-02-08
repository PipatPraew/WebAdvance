<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeTor */

$this->title = 'Update Toollife Tor: ' . $model->idtoollife_tor;
$this->params['breadcrumbs'][] = ['label' => 'Toollife Tors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtoollife_tor, 'url' => ['view', 'id' => $model->idtoollife_tor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toollife-tor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
