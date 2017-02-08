<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeSetvalue */

$this->title = 'Update Toollife Setvalue: ' . $model->idtoollife_setvalue;
$this->params['breadcrumbs'][] = ['label' => 'Toollife Setvalues', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtoollife_setvalue, 'url' => ['view', 'id' => $model->idtoollife_setvalue]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toollife-setvalue-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
