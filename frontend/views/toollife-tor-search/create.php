<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeTor */

$this->title = 'Create Toollife Tor';
$this->params['breadcrumbs'][] = ['label' => 'Toollife Tors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toollife-tor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
