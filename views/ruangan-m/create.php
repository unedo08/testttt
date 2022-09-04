<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RuanganM */

$this->title = 'Create Ruangan M';
$this->params['breadcrumbs'][] = ['label' => 'Ruangan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruangan-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
