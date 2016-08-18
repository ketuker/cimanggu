<?php

namespace app\controllers;

use Yii;
use app\models\Influence;
use app\models\Stakeholder;
use app\models\InfluenceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * InfluenceController implements the CRUD actions for Influence model.
 */
class InfluenceController extends Controller
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
     * Lists all Influence models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InfluenceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Influence model.
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
     * Creates a new Influence model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */


    public function actionStakeholder()
    {
        $data_stakeholder = Yii::$app->db->createCommand("SELECT id, grup FROM stakeholder;")->QueryAll();
        $data_s = (json_encode($data_stakeholder));


        print_r($data_s);
        die;

    }


    public function actionCreate()
    {
        $model = new Influence();


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
     * Updates an existing Influence model.
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
     * Deletes an existing Influence model.
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
     * Finds the Influence model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Influence the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Influence::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
