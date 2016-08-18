<?php

namespace app\controllers;

use Yii;
use app\models\Interest;
use app\models\Stakeholder;
use app\models\InterestSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * InterestController implements the CRUD actions for Interest model.
 */
class InterestController extends Controller
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
     * Lists all Interest models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InterestSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Interest model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Interest model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Interest();

        $stak = Stakeholder::find()->all();

        // $data_stakeholder = Yii::$app->db->createCommand("SELECT id, grup FROM stakeholder;")->QueryAll();
        $data_faktor = Yii::$app->db->createCommand("SELECT id, faktor FROM faktor;")->QueryAll();


        $listData=ArrayHelper::map($stak,'id','grup');
        
        $listDataF=ArrayHelper::map($data_faktor,'id','faktor');

        // print_r($listDataF);
        // die;

        $data_total = Yii::$app->db->createCommand("SELECT sum(nilai) as nilai FROM influence_bobot ;")->QueryAll();
        // $data_total = Yii::$app->db->createCommand("SELECT id,nilai,id_faktor FROM influence_bobot where id_faktor = ".$_GET["crot"]." ;")->QueryAll();
        // print_r($data_bobot);
        // die;


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'listData'=> $listData,
                'listDataF'=> $listDataF,
            ]);
        }
    }

    /**
     * Updates an existing Interest model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $stak = Stakeholder::find()->all();

        // $data_stakeholder = Yii::$app->db->createCommand("SELECT id, grup FROM stakeholder;")->QueryAll();
        $data_faktor = Yii::$app->db->createCommand("SELECT id, faktor FROM faktor;")->QueryAll();


        $listData=ArrayHelper::map($stak,'id','grup');
        
        $listDataF=ArrayHelper::map($data_faktor,'id','faktor');

        // print_r($listDataF);
        // die;

        $data_total = Yii::$app->db->createCommand("SELECT sum(nilai) as nilai FROM influence_bobot ;")->QueryAll();
        // $data_total = Yii::$app->db->createCommand("SELECT id,nilai,id_faktor FROM influence_bobot where id_faktor = ".$_GET["crot"]." ;")->QueryAll();
        // print_r($data_bobot);
        // die;


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'listData'=> $listData,
                'listDataF'=> $listDataF,
            ]);
        }
    }

    /**
     * Deletes an existing Interest model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Interest model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Interest the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Interest::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
