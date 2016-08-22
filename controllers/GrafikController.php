<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class GrafikController extends Controller
{


    public function actionIndex()
    {
        return $this->render('grafik');
    }

    /**
     * Login action.
     *
     * @return string
     */

 
    public function actionAbout()
    {
        return $this->render('about');
    }
}
