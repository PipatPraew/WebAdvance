<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeSc */

$this->title = 'Create Toollife Sc';
$this->params['breadcrumbs'][] = ['label' => 'Toollife Scs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toollife-sc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
