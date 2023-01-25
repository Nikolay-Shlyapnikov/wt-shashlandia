<?php

namespace app\controllers;

use app\models\Category;
use app\models\User;
use app\models\forms\LoginForm;
use app\models\forms\ProductForm;
use app\services\ProductService;
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
        $categories = Category::find()->all();

        if (Yii::$app->request->isPost) {
            $productForm->load(Yii::$app->request->post());

            if ($productForm->validate()) {
                if ((new ProductService())->create($productForm)) {
                    Yii::$app->session->setFlash('success', 'Товар успешно добавлен');
                    $productForm->clean();
                } else {
                    Yii::$app->session->setFlash('danger', 'Произошла ошибка при добавлении');
                }
            }
        }

        return $this->render('index', [
            'model' => $productForm,
            'categories' => $categories
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
