<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Toola */

$this->title = 'Create Toola';
$this->params['breadcrumbs'][] = ['label' => 'Toolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toola-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
