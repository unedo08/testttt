<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ruangan Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruangan-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ruangan M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ruangan_id',
            'nama_ruangan',
            'jumlah_kamar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RuanganM $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ruangan_id' => $model->ruangan_id]);
                 }
            ],
        ],
    ]); ?>


</div>
