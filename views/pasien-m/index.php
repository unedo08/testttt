<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Pasien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pasien M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'pasien_id',
            'nama_pasien',
            'nik',
            'alamat',
            'no_rm',
            //'no_hp',
            //'pekerjaan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\PasienM $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'pasien_id' => $model->pasien_id]);
                 }
            ],
        ],
    ]); ?>


</div>
