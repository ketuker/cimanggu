<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Faktor */

$this->title = 'Create Faktor';
$this->params['breadcrumbs'][] = ['label' => 'Faktors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faktor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
