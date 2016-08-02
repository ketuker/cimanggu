<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdinatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordinats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordinat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ordinat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'interest',
            'influence',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
