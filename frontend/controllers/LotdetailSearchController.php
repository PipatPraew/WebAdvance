<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Lotdetail;
use frontend\models\LotdetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LotdetailSearchController implements the CRUD actions for Lotdetail model.
 */
class LotdetailSearchController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Lotdetail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LotdetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Lotdetail model.
     * @param integer $idlot_detail
     * @param string $lot_scan
     * @return mixed
     */
    public function actionView($idlot_detail, $lot_scan)
    {
        return $this->render('view', [
            'model' => $this->findModel($idlot_detail, $lot_scan),
        ]);
    }

    /**
     * Creates a new Lotdetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Lotdetail();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idlot_detail' => $model->idlot_detail, 'lot_scan' => $model->lot_scan]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Lotdetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idlot_detail
     * @param string $lot_scan
     * @return mixed
     */
    public function actionUpdate($idlot_detail, $lot_scan)
    {
        $model = $this->findModel($idlot_detail, $lot_scan);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idlot_detail' => $model->idlot_detail, 'lot_scan' => $model->lot_scan]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Lotdetail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idlot_detail
     * @param string $lot_scan
     * @return mixed
     */
    public function actionDelete($idlot_detail, $lot_scan)
    {
        $this->findModel($idlot_detail, $lot_scan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Lotdetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idlot_detail
     * @param string $lot_scan
     * @return Lotdetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idlot_detail, $lot_scan)
    {
        if (($model = Lotdetail::findOne(['idlot_detail' => $idlot_detail, 'lot_scan' => $lot_scan])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
