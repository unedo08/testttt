<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\Models\PasienM;

/* @var $this yii\web\View */
/* @var $model app\models\PendaftaranT */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaran-t-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php 
        //use app\models\Country;
        $nama=PasienM::find()->all();

        //use yii\helpers\ArrayHelper;
        $listData=ArrayHelper::map($nama,'pasien_id','nama_pasien');

        echo $form->field($model, 'nama_pasien')->dropDownList(
                $listData,
                ['prompt'=>'Select...']
                );
    ?>
    <?= $form->field($model, 'tgl_pendaftaran')->textInput() ?>

    <?= $form->field($model, 'tindakan')->textInput() ?>

    <?= $form->field($model, 'obat')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
