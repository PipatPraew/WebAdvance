<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeValue */

$this->title = 'Update Toollife Value: ' . $model->idtoollife_value;
$this->params['breadcrumbs'][] = ['label' => 'Toollife Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtoollife_value, 'url' => ['view', 'id' => $model->idtoollife_value]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toollife-value-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
