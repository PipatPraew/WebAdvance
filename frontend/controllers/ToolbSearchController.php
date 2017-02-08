<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Toolb;
use frontend\models\ToolbSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ToolbSearchController implements the CRUD actions for Toolb model.
 */
class ToolbSearchController extends Controller
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
     * Lists all Toolb models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ToolbSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Toolb model.
     * @param integer $idtool_b
     * @param string $tool_b_no
     * @return mixed
     */
    public function actionView($idtool_b, $tool_b_no)
    {
        return $this->render('view', [
            'model' => $this->findModel($idtool_b, $tool_b_no),
        ]);
    }

    /**
     * Creates a new Toolb model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Toolb();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtool_b' => $model->idtool_b, 'tool_b_no' => $model->tool_b_no]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Toolb model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idtool_b
     * @param string $tool_b_no
     * @return mixed
     */
    public function actionUpdate($idtool_b, $tool_b_no)
    {
        $model = $this->findModel($idtool_b, $tool_b_no);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtool_b' => $model->idtool_b, 'tool_b_no' => $model->tool_b_no]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Toolb model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idtool_b
     * @param string $tool_b_no
     * @return mixed
     */
    public function actionDelete($idtool_b, $tool_b_no)
    {
        $this->findModel($idtool_b, $tool_b_no)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Toolb model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idtool_b
     * @param string $tool_b_no
     * @return Toolb the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idtool_b, $tool_b_no)
    {
        if (($model = Toolb::findOne(['idtool_b' => $idtool_b, 'tool_b_no' => $tool_b_no])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
