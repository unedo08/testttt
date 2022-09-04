<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Obat Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Obat M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'obat_id',
            'nama_obat',
            'stok',
            'harga',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ObatM $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'obat_id' => $model->obat_id]);
                 }
            ],
        ],
    ]); ?>


</div>
