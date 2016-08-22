<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use kartik\widgets\DepDrop;

/* @var $this yii\web\View */
/* @var $model app\models\Interest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="interest-form">

    <?php $form = ActiveForm::begin(); ?>

      <?= $form->field($model, 'id_stakeholder')->widget(Select2::classname(), [
    'data' => $listData,
    // 'language' => 'en',
    'options' => ['placeholder' => 'Pilih Stakeholder ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
	]); 

     ?>


     <?= $form->field($model, 'id_faktor')->widget(Select2::classname(), [
    'data' => $listDataF,
    // 'language' => 'de',
    'options' => ['placeholder' => 'Pilih Faktor ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
	]); 

     ?>

    <?= $form->field($model, 'nilai')->textInput(['maxlength' => true]) ?>

<!--     <?= $form->field($model, 'bobot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_faktor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_stakeholder')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
