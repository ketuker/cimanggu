<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Influence */

$this->title = 'Beri Nilai Influence';
$this->params['breadcrumbs'][] = ['label' => 'Perhitungan Influence', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="influence-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listData'=>$listData,
        'listDataF'=> $listDataF,
    ]) ?>

</div>
