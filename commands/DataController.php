<?php

namespace app\commands;

use app\services\CategoryService;
use app\services\SubcategoryService;
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
            'wrapper' => '{"top":false,"bottom":true}',
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

    const SUBCATEGORIES = [
        [
            'title' => 'Говядина',
            'modifier' => '---',
            'category_id' => 1,
        ],
        [
            'title' => 'Свинина',
            'modifier' => '---',
            'category_id' => 1,
        ],
        [
            'title' => 'Баранина',
            'modifier' => '---',
            'category_id' => 1,
        ],
        [
            'title' => 'Курица',
            'modifier' => '---',
            'category_id' => 1,
        ],
        [
            'title' => 'Рыба',
            'modifier' => '---',
            'category_id' => 1,
        ],
        [
            'title' => 'Колбаски',
            'modifier' => '---',
            'category_id' => 1,
        ],
        [
            'title' => 'Овощи',
            'modifier' => '---',
            'category_id' => 2,
        ],
    ];

    const PRODUCTS = [
        [
            'title' => 'Шашлык из свиной шейки',
            'desc' => '---',
            'price' => 320,
            'subcategory_id' => 1,
        ],
        [
            'title' => 'Шашлык из свиных рёбрышек',
            'desc' => '---',
            'price' => 320,
            'subcategory_id' => 1,
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

        print("users:\n");
        foreach ($users as $user) {
            var_dump((new UserService())->create($user));
        }
        echo "\n";

        print("categories:\n");
        foreach (self::CATEGORIES as $category) {
            var_dump((new CategoryService())->create($category));
        }
        echo "\n";

        print("subcategories:\n");
        foreach (self::SUBCATEGORIES as $subcategory) {
            var_dump((new SubcategoryService())->create($subcategory));
        }
        echo "\n";

        print("products:\n");
        foreach (self::PRODUCTS as $product) {
            var_dump((new ProductService())->create($product));
        }

        return ExitCode::OK;
    }
}
