<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RuanganM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ruangan-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_ruangan')->textInput() ?>

    <?= $form->field($model, 'jumlah_kamar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
