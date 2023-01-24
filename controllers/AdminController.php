<?php

namespace app\controllers;

use app\models\Product;
use app\models\User;
use app\models\forms\LoginForm;
use app\models\forms\ProductForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class AdminController extends Controller
{
    public $layout = 'admin-layout';

    public function behaviors(): array
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'denyCallback' => function () {
                    $this->redirect(['site/index']);
                },
                'only' => ['index', 'login'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?']
                    ]
                ]
            ]
        ];
    }

    public function actionIndex()
    {
        $productForm = new ProductForm();

        if (Yii::$app->request->isPost) {
            $productForm->load(Yii::$app->request->post());

            if ($productForm->validate()) {
                $product = new Product();

                $product->title = $productForm->title;
                $product->desc = $productForm->desc;
                $product->price = $productForm->price;
                $product->category_id = $productForm->category_id;

                if ($product->save()) {
                    Yii::$app->session->setFlash('success', 'This is the message');
                    $productForm->title = '';
                    $productForm->desc = '';
                    $productForm->price = '';
                    $productForm->category_id = '';
                } else {
                    Yii::$app->session->setFlash('danger', 'This is the message');
                }
            }
        }

        return $this->render('index', [
            'model' => $productForm
        ]);
    }

    public function actionLogin()
    {
        $loginForm = new LoginForm();

        if (Yii::$app->request->isPost) {
            $loginForm->load(Yii::$app->request->post());

            if ($loginForm->validate()) {
                Yii::$app->user->login(User::findOne(['email' => $loginForm->email]));

                return $this->redirect(['admin/index']);
            }
        }

        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['admin/login']);
    }
}
