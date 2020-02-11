<?php
   
    namespace app\controllers;

    use yii\web\Controller;

    class SiteController extends Controller
    {
        public function actionIndex() 
        {
                // \yii::debug( "Hello from actionIndex");
                // \yii::warning("Warning Tea");
                // \yii::error("Open optional error");
                return $this->render('index');
        }
        public function actionJoin() 
        {
                return $this->render('join');
        }
        public function actionLogin() 
        {
                return $this->render('login');
        }
    }
    