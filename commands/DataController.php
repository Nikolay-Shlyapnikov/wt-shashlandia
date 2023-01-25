<?php

namespace app\commands;

use app\services\CategoryService;
use app\services\ProductService;
use app\services\UserService;
use Yii;
use yii\console\Controller;
use yii\console\ExitCode;

class DataController extends Controller
{
    const CATEGORIES = [
        [
            'title' => 'Мясо',
            'desc' => 'Для всех вкусовых предпочтений',
            'modifier' => 'meat',
            'wrapper' => '{"top":true,"bottom":false}',
        ],
        [
            'title' => 'Овощи',
            'desc' => 'Всегда самые свежие',
            'modifier' => 'vegetables',
            'wrapper' => '{"top":true,"bottom":false}',
        ],
        [
            'title' => 'Все для шашлыка',
            'desc' => 'Мангалы, уголь, вода, разжигательная смесь',                
            'modifier' => 'kebab',
            'wrapper' => '{"top":true,"bottom":true}',
        ],
        [
            'title' => 'Услуги',
            'desc' => 'Профессиональный мангальщик',
            'modifier' => 'services',
            'wrapper' => '{"top":true,"bottom":true}',
        ],
    ];

    const PRODUCTS = [
        [
            'title' => 'iMac',
            'desc' => 'херня',
            'price' => 100,
            'category_id' => 1,
        ],
        [
            'title' => 'macBook',
            'desc' => 'херня',
            'price' => 100,
            'category_id' => 1,
        ],
    ];

    public function actionImport()
    {
        $users = [
            [
                'email' => 'test@example.com',
                'password_hash' => Yii::$app->security->generatePasswordHash('123'),
                'is_admin' => true,
            ],
        ];

        foreach ($users as $user) {
            var_dump((new UserService())->create($user)) . "\n";
        }

        foreach (self::CATEGORIES as $category) {
            var_dump((new CategoryService())->create($category)) . "\n";
        }

        foreach (self::PRODUCTS as $product) {
            var_dump((new ProductService())->create($product)) . "\n";
        }

        return ExitCode::OK;
    }
}
