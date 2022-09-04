<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tindakan Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tindakan M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tindakan_id',
            'nama_tindakan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TindakanM $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tindakan_id' => $model->tindakan_id]);
                 }
            ],
        ],
    ]); ?>


</div>
