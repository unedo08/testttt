<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RuanganM */

$this->title = 'Update Ruangan M: ' . $model->ruangan_id;
$this->params['breadcrumbs'][] = ['label' => 'Ruangan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ruangan_id, 'url' => ['view', 'ruangan_id' => $model->ruangan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ruangan-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
