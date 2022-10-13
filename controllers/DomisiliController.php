<?php

namespace app\controllers;

use app\models\Domisili;
use app\models\DomisiliSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DomisiliController implements the CRUD actions for Domisili model.
 */
class DomisiliController extends Controller
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
     * Lists all Domisili models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DomisiliSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Domisili model.
     * @param int $id_domisili Id Domisili
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_domisili)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_domisili),
        ]);
    }

    /**
     * Creates a new Domisili model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Domisili();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_domisili' => $model->id_domisili]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Domisili model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_domisili Id Domisili
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_domisili)
    {
        $model = $this->findModel($id_domisili);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_domisili' => $model->id_domisili]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Domisili model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_domisili Id Domisili
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_domisili)
    {
        $this->findModel($id_domisili)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Domisili model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_domisili Id Domisili
     * @return Domisili the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_domisili)
    {
        if (($model = Domisili::findOne(['id_domisili' => $id_domisili])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
