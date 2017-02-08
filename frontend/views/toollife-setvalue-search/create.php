<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ToollifeSetvalue */

$this->title = 'Create Toollife Setvalue';
$this->params['breadcrumbs'][] = ['label' => 'Toollife Setvalues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toollife-setvalue-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
