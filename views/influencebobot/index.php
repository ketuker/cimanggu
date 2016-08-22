<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InfluencebobotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perhitungan Nilai Bobot Influence';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="influencebobot-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Nilai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nilai',
            'id_faktor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
