<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InfluenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perhitungan Influence';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="influence-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Beri Nilai Influence', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nilai',
            'bobot',
            'id_faktor',
            'id_stakeholder',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
