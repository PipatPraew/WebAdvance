<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Toolc */

$this->title = 'Create Toolc';
$this->params['breadcrumbs'][] = ['label' => 'Toolcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toolc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
