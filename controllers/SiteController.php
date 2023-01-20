<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionPayment()
    {
        return $this->render('payment');
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }

    public function actionPolicy()
    {
        return $this->render('policy');
    }
}
