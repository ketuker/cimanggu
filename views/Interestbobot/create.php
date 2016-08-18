<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Interestbobot */

$this->title = 'Tambah Nilai';
$this->params['breadcrumbs'][] = ['label' => 'Perhitungan Nilai Bobot Interest', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interestbobot-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listDataF' => $listDataF,
    ]) ?>

</div>
