<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Lotdetail */

$this->title = 'Create Lotdetail';
$this->params['breadcrumbs'][] = ['label' => 'Lotdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lotdetail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
