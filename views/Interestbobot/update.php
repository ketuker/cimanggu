<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Interestbobot */

// $this->title = 'Update Nilai: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Perhitungan Nilai Bobot Interest', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="interestbobot-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
