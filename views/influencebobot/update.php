<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Influencebobot */

// $this->title = 'Update Influencebobot: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Perhitungan Nilai Bobot Influence', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="influencebobot-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
