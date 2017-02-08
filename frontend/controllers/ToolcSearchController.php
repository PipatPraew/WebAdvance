<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Toolc;
use frontend\models\ToolcSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ToolcSearchController implements the CRUD actions for Toolc model.
 */
class ToolcSearchController extends Controller
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
     * Lists all Toolc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ToolcSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Toolc model.
     * @param integer $idtool_c
     * @param string $tool_c_no
     * @return mixed
     */
    public function actionView($idtool_c, $tool_c_no)
    {
        return $this->render('view', [
            'model' => $this->findModel($idtool_c, $tool_c_no),
        ]);
    }

    /**
     * Creates a new Toolc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Toolc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtool_c' => $model->idtool_c, 'tool_c_no' => $model->tool_c_no]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Toolc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idtool_c
     * @param string $tool_c_no
     * @return mixed
     */
    public function actionUpdate($idtool_c, $tool_c_no)
    {
        $model = $this->findModel($idtool_c, $tool_c_no);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtool_c' => $model->idtool_c, 'tool_c_no' => $model->tool_c_no]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Toolc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idtool_c
     * @param string $tool_c_no
     * @return mixed
     */
    public function actionDelete($idtool_c, $tool_c_no)
    {
        $this->findModel($idtool_c, $tool_c_no)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Toolc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idtool_c
     * @param string $tool_c_no
     * @return Toolc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idtool_c, $tool_c_no)
    {
        if (($model = Toolc::findOne(['idtool_c' => $idtool_c, 'tool_c_no' => $tool_c_no])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
