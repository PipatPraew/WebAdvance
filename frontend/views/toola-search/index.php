<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ToolaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Table Tool A';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toola-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php// Html::a('Create Toola', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtool_a',
            'tool_a_no',
            'tool_a_ch',
            'idmachine',
            'machine_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
