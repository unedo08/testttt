<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TindakanM */

$this->title = 'Update Tindakan M: ' . $model->tindakan_id;
$this->params['breadcrumbs'][] = ['label' => 'Tindakan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tindakan_id, 'url' => ['view', 'tindakan_id' => $model->tindakan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tindakan-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
