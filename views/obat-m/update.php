<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ObatM */

$this->title = 'Update Obat M: ' . $model->obat_id;
$this->params['breadcrumbs'][] = ['label' => 'Obat Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->obat_id, 'url' => ['view', 'obat_id' => $model->obat_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obat-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
