<?php

namespace app\controllers;

use app\models\ObatM;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ObatMController implements the CRUD actions for ObatM model.
 */
class ObatMController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all ObatM models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ObatM::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'obat_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ObatM model.
     * @param int $obat_id Obat ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($obat_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($obat_id),
        ]);
    }

    /**
     * Creates a new ObatM model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ObatM();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'obat_id' => $model->obat_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ObatM model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $obat_id Obat ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($obat_id)
    {
        $model = $this->findModel($obat_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'obat_id' => $model->obat_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ObatM model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $obat_id Obat ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($obat_id)
    {
        $this->findModel($obat_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ObatM model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $obat_id Obat ID
     * @return ObatM the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($obat_id)
    {
        if (($model = ObatM::findOne(['obat_id' => $obat_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
