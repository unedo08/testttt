<?php

namespace app\controllers;

use app\models\PasienM;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PasienMController implements the CRUD actions for PasienM model.
 */
class PasienMController extends Controller
{
    /**
     * @inheritDoc
     */
    public function filters()
    {
        return array( 'accessControl' ); // perform access control for CRUD operations
    }

    public function accessRules()
    {
        return array(
            array('allow', // allow authenticated users to access all actions
                'users'=>array('@'),
            ),
            array('deny'),
        );
    }
    public function filterAccessControl($filterChain)
    {   
        $rules = $this->accessRules();

        // default deny
        $rules[] = array('deny');

        $filter = new CAccessControlFilter;
        $filter->setRules( $rules );
        $filter->filter($filterChain);
    }
    public function rules() {
        return array(
            // other rules here
            array('allow') // default allow
        );
     }
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
                
            ],
            
        );
    }

    /**
     * Lists all PasienM models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => PasienM::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'pasien_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PasienM model.
     * @param int $pasien_id Pasien ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($pasien_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($pasien_id),
        ]);
    }

    /**
     * Creates a new PasienM model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PasienM();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'pasien_id' => $model->pasien_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PasienM model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $pasien_id Pasien ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($pasien_id)
    {
        $model = $this->findModel($pasien_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'pasien_id' => $model->pasien_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PasienM model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $pasien_id Pasien ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($pasien_id)
    {
        $this->findModel($pasien_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PasienM model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $pasien_id Pasien ID
     * @return PasienM the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($pasien_id)
    {
        if (($model = PasienM::findOne(['pasien_id' => $pasien_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
