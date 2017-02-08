<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Machine;
use frontend\models\MachineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MachineSearchController implements the CRUD actions for Machine model.
 */
class MachineSearchController extends Controller
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
     * Lists all Machine models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MachineSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Machine model.
     * @param integer $idmachine
     * @param string $machine_no
     * @param integer $idlot_detail
     * @param string $lot_scan
     * @return mixed
     */
    public function actionView($idmachine, $machine_no, $idlot_detail, $lot_scan)
    {
        return $this->render('view', [
            'model' => $this->findModel($idmachine, $machine_no, $idlot_detail, $lot_scan),
        ]);
    }

    /**
     * Creates a new Machine model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Machine();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idmachine' => $model->idmachine, 'machine_no' => $model->machine_no, 'idlot_detail' => $model->idlot_detail, 'lot_scan' => $model->lot_scan]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Machine model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idmachine
     * @param string $machine_no
     * @param integer $idlot_detail
     * @param string $lot_scan
     * @return mixed
     */
    public function actionUpdate($idmachine, $machine_no, $idlot_detail, $lot_scan)
    {
        $model = $this->findModel($idmachine, $machine_no, $idlot_detail, $lot_scan);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idmachine' => $model->idmachine, 'machine_no' => $model->machine_no, 'idlot_detail' => $model->idlot_detail, 'lot_scan' => $model->lot_scan]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Machine model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idmachine
     * @param string $machine_no
     * @param integer $idlot_detail
     * @param string $lot_scan
     * @return mixed
     */
    public function actionDelete($idmachine, $machine_no, $idlot_detail, $lot_scan)
    {
        $this->findModel($idmachine, $machine_no, $idlot_detail, $lot_scan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Machine model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idmachine
     * @param string $machine_no
     * @param integer $idlot_detail
     * @param string $lot_scan
     * @return Machine the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idmachine, $machine_no, $idlot_detail, $lot_scan)
    {
        if (($model = Machine::findOne(['idmachine' => $idmachine, 'machine_no' => $machine_no, 'idlot_detail' => $idlot_detail, 'lot_scan' => $lot_scan])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
