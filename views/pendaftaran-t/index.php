<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pendaftaran Ts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-t-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pendaftaran T', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pendaftaran_id',
            'nama_pasien',
            'nik',
            'no_rm',
            'tgl_pendaftaran',
            //'tindakan',
            //'obat',
            //'harga',
            //'total',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PendaftaranT $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'pendaftaran_id' => $model->pendaftaran_id]);
                 }
            ],
        ],
    ]); ?>


</div>
