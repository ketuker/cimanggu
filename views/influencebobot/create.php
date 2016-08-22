<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Influencebobot */

$this->title = 'Tambah Nilai';
$this->params['breadcrumbs'][] = ['label' => 'Perhitungan Nilai Bobot Influence', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="influencebobot-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listDataF' => $listDataF,
    ]) ?>

</div>
