<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Influencebobot */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="influencebobot-form">

    <?php $form = ActiveForm::begin(); ?>

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



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Buat' : 'Ubah', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
