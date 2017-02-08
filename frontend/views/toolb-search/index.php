<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ToolbSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Table Tool B';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toolb-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php// Html::a('Create Toolb', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtool_b',
            'tool_b_no',
            'tool_b_ch',
            'idmachine',
            'machine_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
