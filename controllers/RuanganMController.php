<?php

namespace app\controllers;

use app\models\RuanganM;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RuanganMController implements the CRUD actions for RuanganM model.
 */
class RuanganMController extends Controller
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
     * Lists all RuanganM models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => RuanganM::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'ruangan_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RuanganM model.
     * @param int $ruangan_id Ruangan ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ruangan_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($ruangan_id),
        ]);
    }

    /**
     * Creates a new RuanganM model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RuanganM();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ruangan_id' => $model->ruangan_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RuanganM model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ruangan_id Ruangan ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ruangan_id)
    {
        $model = $this->findModel($ruangan_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ruangan_id' => $model->ruangan_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RuanganM model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ruangan_id Ruangan ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ruangan_id)
    {
        $this->findModel($ruangan_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RuanganM model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ruangan_id Ruangan ID
     * @return RuanganM the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ruangan_id)
    {
        if (($model = RuanganM::findOne(['ruangan_id' => $ruangan_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
