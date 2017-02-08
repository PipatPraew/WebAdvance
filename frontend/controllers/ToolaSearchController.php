<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Toola;
use frontend\models\ToolaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ToolaSearchController implements the CRUD actions for Toola model.
 */
class ToolaSearchController extends Controller
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
     * Lists all Toola models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ToolaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Toola model.
     * @param integer $idtool_a
     * @param string $tool_a_no
     * @return mixed
     */
    public function actionView($idtool_a, $tool_a_no)
    {
        return $this->render('view', [
            'model' => $this->findModel($idtool_a, $tool_a_no),
        ]);
    }

    /**
     * Creates a new Toola model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Toola();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtool_a' => $model->idtool_a, 'tool_a_no' => $model->tool_a_no]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Toola model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idtool_a
     * @param string $tool_a_no
     * @return mixed
     */
    public function actionUpdate($idtool_a, $tool_a_no)
    {
        $model = $this->findModel($idtool_a, $tool_a_no);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtool_a' => $model->idtool_a, 'tool_a_no' => $model->tool_a_no]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Toola model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idtool_a
     * @param string $tool_a_no
     * @return mixed
     */
    public function actionDelete($idtool_a, $tool_a_no)
    {
        $this->findModel($idtool_a, $tool_a_no)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Toola model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idtool_a
     * @param string $tool_a_no
     * @return Toola the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idtool_a, $tool_a_no)
    {
        if (($model = Toola::findOne(['idtool_a' => $idtool_a, 'tool_a_no' => $tool_a_no])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
