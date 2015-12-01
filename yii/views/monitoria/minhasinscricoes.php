<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MonitoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Minhas Inscrições';
$this->params['breadcrumbs'][] = ['label' => 'Monitorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'numProcs', 
            //'IDDisc',
            [
                'attribute'=>'IDDisc', 
                'value'=>'nomeDisciplina'
            ],
            'IDperiodoinscr',
            [
                'attribute'=>'bolsa', 
                'value'=>'traducao_bolsa'
            ],
            [
                'attribute'=>'status', 
                'value'=>'traducao_status'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
