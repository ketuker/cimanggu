<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ordinat */

$this->title = 'Create Ordinat';
$this->params['breadcrumbs'][] = ['label' => 'Ordinats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordinat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
