<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Toolb */

$this->title = 'Create Toolb';
$this->params['breadcrumbs'][] = ['label' => 'Toolbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toolb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
