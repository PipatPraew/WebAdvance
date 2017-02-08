<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ToolcSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Table Tool C';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toolc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php// Html::a('Create Toolc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtool_c',
            'tool_c_no',
            'tool_c_ch',
            'idmachine',
            'machine_no',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
