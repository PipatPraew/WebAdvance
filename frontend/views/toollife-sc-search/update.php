<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeSc */

$this->title = 'Update Toollife Sc: ' . $model->idtoollife_s_c;
$this->params['breadcrumbs'][] = ['label' => 'Toollife Scs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtoollife_s_c, 'url' => ['view', 'id' => $model->idtoollife_s_c]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="toollife-sc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
